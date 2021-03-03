<?php

namespace ehsan\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\models\Business;
use ehsan\Category\models\Category;
use ehsan\Comment\models\Comment;
use ehsan\Media\Services\MediaService;
use ehsan\User\Http\Requests\UserUpdateProfileRequest;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $pagetitle = 'نیترو بیزینس';
        $business = Business::orderBy('id', 'DESC')->where('status', 1)->paginate(18);
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $comments = Comment::where('status', 1)->latest()->paginate(8);
        return view('front::index', ['pagetitle' => $pagetitle, 'business' => $business, 'categories' => $categories , 'comments' => $comments]);
    }


    public function ShowBusiness(Business $business)
    {
        $pagetitle = 'جزییات کسب و کار';
        $categories = Category::where('parent_id', null)->with('SubCategories')->get();
        $business->increment('hit');
        $comments = $business->comments()->where('status', 1)->get();
        $RelatedBusiness = $business->category->businesses()->where('id', '!=', $business->id)->take(9)->get();
        return view('front::show', compact('business', 'pagetitle', 'categories', 'comments' , 'RelatedBusiness'));
    }




   



    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }
}
