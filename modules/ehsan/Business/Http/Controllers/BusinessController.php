<?php

namespace ehsan\Business\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\Http\Requests\BusinessRequest;
use ehsan\Business\models\Business;
use ehsan\Category\models\Category;
use ehsan\Media\services\MediaService;
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
        $pagetitle = 'مشاهده کسب و کار ها';
        $breadcrumb = 'مشاهده کسب و کار ها';
        $business = Business::OrderBy('id' , 'DESC')->paginate(8);
        return view('Business::index', compact('pagetitle', 'breadcrumb' , 'business'));
    }




    public function CreateFrontBusiness()
    {
        $category = Category::all();
        $pagetitle = 'ثبت کسب و کار جدید';
        return view('user::front.CreateBusiness', compact('pagetitle', 'category'));
    }




    public function StoreFrontBusiness(BusinessRequest $request)
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



        // try {
        $business->save();
        // } catch (Exception $exc) {
        //     switch ($exc->getCode()) {
        //         case 23000:
        //             $msg = "خطایی رخ داده است";
        //             break;
        //     }
        //     return redirect(route('business.create'))->with('warning', $msg);
        // }

        $msg = "درخواست شما با موفقیت ارسال شد. پس از تایید اطلاعات کسب و کار شما در سایت قرار میگیرد.";
        return redirect(route('business.create'))->with('success', $msg);
    }





    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function updatestatus(Business $business)
    {
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
