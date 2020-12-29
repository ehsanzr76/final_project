<?php

namespace ehsan\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Category\Http\requests\CategoryRequest;
use ehsan\Category\models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::OrderBy('id', 'DESC')->paginate(5);
        $pagetitle = 'دسته بندی ها';
        $breadcrumb = 'دسته بندی ها';
        return view('Category::index', compact('pagetitle', 'breadcrumb', 'categories'));
    }






    // public function create()
    // {
    //     $pagetitle = 'ایجاد دسته بندی';
    //     $breadcrumb = 'دسته بندی ها / ایجاد دسته بندی';
    //     $categories = Category::all();
    //     return view('Category::create', compact('pagetitle', 'categories', 'breadcrumb'));
    // }






    public function store(CategoryRequest $request)
    {

        $categories = new Category();

        try {
            $categories->create($request->all());
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('categories.create'))->with('warning', $msg);
        }

        $msg = "دسته جدید ایجاد شد.";
        return redirect(route('categories'))->with('success', $msg);
    }





    public function show($id)
    {
        //

    }







    public function edit(Category $category)
    {
        $categories = Category::where('id', '!=', $category->id)->get();
        $breadcrumb = 'دسته بندی ها / به روز رسانی دسته بندی';
        $pagetitle = 'ویرایش دسته بندی';
        return view('Category::edit', compact('category', 'breadcrumb', 'pagetitle', 'categories'));
    }






    public function update(CategoryRequest $request, Category $category)
    {

        try {
            $category->update($request->all());
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('categories.edit', $category->id))->with('warning', $msg);
        }

        $msg = "دسته با موفقیت به روز رسانی شد.";
        return redirect(route('categories'))->with('success', $msg);
    }






    public function destroy(Category $category)
    {
        try {

            $category->delete();

        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('categories'))->with('warning' , $msg);
        }

        $msg = 'دسته با موفقیت حذف شد.';
        return redirect(route('categories'))->with('success' , $msg);
    }
}
