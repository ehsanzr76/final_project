<?php

namespace ehsan\Vip\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\VipUpdateRequest;
use ehsan\Business\Http\Requests\BusinessStoreRequest;
use ehsan\Business\Http\Requests\BusinessUpdateRequest;
use ehsan\Business\models\Business;
use ehsan\Category\models\Category;
use ehsan\Media\models\Media;
use ehsan\Media\services\MediaService;
use ehsan\Vip\Http\Requests\VipStoreRequest;
use ehsan\Vip\models\Vip;
use Intervention\Image\Facades\Image;

use Exception;
use Illuminate\Http\Request;

class VipController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        $pagetitle = 'مشاهده اشتراک های ویژه';
        $breadcrumb = 'لیست اشتراک های ویژه';
        $vip = Vip::OrderBy('id', 'DESC')->paginate(6);
        return view('vip::index', compact('pagetitle', 'breadcrumb', 'vip'));
    }




    public function store(VipStoreRequest $request)
    {

        $vip = new Vip();

        try {
            $vip->create($request->all());
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('vip.create'))->with('warning', $msg);
        }

        $msg = "اشتراک با موفقیت ایجاد شد.";
        return redirect(route('vip'))->with('success', $msg);
    }




    public function edit(Vip $vip)
    {
        $pagetitle = 'ویرایش اشتراک ویژه';
        $breadcrumb = '   اشتراک ویژه   / ویرایش اشتراک ویژه ';
        return view('vip::edit', compact('pagetitle', 'breadcrumb', 'vip'));
    }




    public function update(VipStoreRequest $request, Vip $vip)
    {

        $vip->name = $request->name;
        $vip->description = $request->description;
        $vip->price = $request->price;
        $vip->type = $request->type;

        try {
            $vip->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('vip.edit', $vip->id))->with('warning', $msg);
        }

        $msg = "اشتراک ویژه با موفقیت بروزرسانی شد.";
        return redirect(route('vip'))->with('success', $msg);
    }


    

    public function destroy(Vip $vip)
    {
        try {
            $vip->delete();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('vip'))->with('warning', $msg);
        }

        $msg = 'اشتراک با موفقیت حذف گردید.';
        return redirect(route('vip'))->with('success', $msg);
    }
}
