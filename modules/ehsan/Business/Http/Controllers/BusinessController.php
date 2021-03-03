<?php

namespace ehsan\Business\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\Http\Requests\BusinessStoreRequest;
use ehsan\Business\Http\Requests\BusinessUpdateRequest;
use ehsan\Business\models\Business;
use ehsan\Category\models\Category;
use ehsan\Media\models\Media;
use ehsan\Media\services\MediaService;
use Intervention\Image\Facades\Image;

use Exception;
use Illuminate\Http\Request;

class BusinessController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        $this->authorize('manage', Business::class);
        $pagetitle = 'مشاهده کسب و کار ها';
        $breadcrumb = 'مشاهده کسب و کار ها';
        $business = Business::OrderBy('id', 'DESC')->paginate(6);
        return view('Business::index', compact('pagetitle', 'breadcrumb', 'business'));
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




    public function CreateFrontBusiness()
    {
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $category = Category::all();
        $pagetitle = 'ثبت کسب و کار جدید';
        return view('user::front.CreateBusiness', compact('pagetitle', 'category', 'categories'));
    }




    public function StoreFrontBusiness(BusinessStoreRequest $request)
    {
        $request->request->add(['media_id' => MediaService::Upload($request->file('image'))->id]);

        $business = new Business([
            'title' => $request->title,
            'body' => $request->body,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'BusinessNumber' => $request->BusinessNumber,
            'category_id' => $request->category_id,
            'media_id' => $request->media_id
        ]);



        try {

            $business->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('business.create'))->with('warning', $msg);
        }

        $msg = "درخواست شما با موفقیت ارسال شد. پس از تایید اطلاعات کسب و کار شما در سایت قرار میگیرد.";
        return redirect(route('business.create'))->with('success', $msg);
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
