<?php

namespace ehsan\ContactUs\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\Http\Requests\BusinessStoreRequest;
use ehsan\Business\Http\Requests\BusinessUpdateRequest;
use ehsan\Business\models\Business;
use ehsan\Category\models\Category;
use ehsan\ContactUs\Http\Requests\ContactStoreRequest;
use ehsan\ContactUs\models\Contact;
use ehsan\Media\models\Media;
use ehsan\Media\services\MediaService;
use Intervention\Image\Facades\Image;

use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function index()
    {
        $pagetitle = 'مشاهده ارتباط با ما';
        $breadcrumb = 'مشاهده ارتباط با ما';
        $contacts = Contact::OrderBy('id', 'DESC')->paginate(6);
        return view('contact::index', compact('pagetitle', 'breadcrumb', 'contacts'));
    }


    public function edit($id)
    {
        $this->authorize('manage', Business::class);
        $category = Category::all();
        $business = Business::findOrfail($id);
        $pagetitle = 'ویرایش کسب و کار ها';
        $breadcrumb = 'کسب و کار ها   / ویرایش کسب و کارها';
        return view('Business::edit', compact('pagetitle', 'breadcrumb', 'business', 'category'));
    }



    public function update(BusinessUpdateRequest $request, Business $business)
    {
        $this->authorize('manage', Business::class);

        if ($request->hasFile('image')) {
            $request->request->add(['media_id' => MediaService::Upload($request->file('image'))->id]);
            $business->image->delete();
        } else {
            $request->request->add(['media_id' => $business->media_id]);
        }

        $business->title = $request->title;
        $business->body = $request->body;
        $business->mobile = $request->mobile;
        $business->address = $request->address;
        $business->BusinessNumber = $request->BusinessNumber;
        $business->category_id = $request->category_id;
        $business->media_id = $request->media_id;

        try {
            $business->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('business.edit', $business->id))->with('warning', $msg);
        }

        $msg = "کسب و  کار با موفقیت به روز رسانی شد.";
        return redirect(route('Business'))->with('success', $msg);
    }




    public function CreateFrontContactUs()
    {
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $category = Category::all();
        $pagetitle = 'ارتباط با ما';
        return view('contact::CreateContact', compact('pagetitle' , 'categories' , 'category'));
    }




    public function StoreFrontContactUs(ContactStoreRequest $request)
    {

        $contact = new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
        ]);



        try {

            $contact->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('contact.create'))->with('warning', $msg);
        }

        $msg = "درخواست شما با موفقیت ارسال شد.";
        return redirect(route('contact.create'))->with('success', $msg);
    }









    public function destroy(Business $business)
    {
        $this->authorize('manage', Business::class);
        try {

            if ($business->image) {
                $business->image->delete();
            }
            $business->delete();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('Business'))->with('warning', $msg);
        }

        $msg = 'کسب و کار با موفقیت حذف شد.';
        return redirect(route('Business'))->with('success', $msg);
    }




    public function updatestatus(Business $business)
    {
        $this->authorize('manage', Business::class);
        if ($business->status == 1) {
            $business->status = 0;
        } else {
            $business->status = 1;
        }

        $business->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('Business'))->with('success', $msg);
    }
}
