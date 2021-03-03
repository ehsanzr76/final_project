<?php

namespace ehsan\Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use ehsan\Business\models\Business;
use ehsan\Comment\Http\Requests\CommentRequest;
use ehsan\Comment\Http\Requests\CommentUpdateRequest;
use ehsan\Comment\models\Comment;
use Exception;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function index()
    {
        $pagetitle = 'لیست نظرات';
        $breadcrumb = 'لیست نظرات';
        $comments = Comment::OrderBy('id' , 'DESC')->paginate(6);
        return view('comment::index' , compact('pagetitle' , 'breadcrumb' , 'comments'));
    }




    public function storeFrontComment(Business $business, CommentRequest $request)
    {

        $business->comments()->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'body' => $request->body,
            ]
        );
        $msg = 'دیدگاه شما با موفقیت ثبت شد. پس از تایید در همین صفحه نمایش داده می شود.';
        return redirect(route('business.show' , $business->id))->with('success', $msg);

        //
    }




    public function edit($id)
    {
        $comment = Comment::findOrfail($id);
        $pagetitle = 'ویرایش نظرات';
        $breadcrumb = ' نظرات / ویرایش نظرات';
        return view('comment::edit', compact('pagetitle', 'breadcrumb', 'comment'));
    }





    
  
    public function update(CommentUpdateRequest $request, Comment $comment)
    {

        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->body;

        try {
            $comment->save();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = "خطایی رخ داده است";
                    break;
            }
            return redirect(route('comment.edit', $comment->id))->with('warning', $msg);
        }

        $msg = "دیدگاه با موفقیت بروزرسانی شد.";
        return redirect(route('comment'))->with('success', $msg);
    }






    public function destroy(Comment $comment)
    {
        try {
            $comment->delete();
        } catch (Exception $exc) {
            switch ($exc->getCode()) {
                case 23000:
                    $msg = 'خطایی رخ داده است';
                    break;
            }

            return redirect(route('comment'))->with('warning', $msg);
        }

        $msg = 'دیدگاه با موفقیت حذف گردید.';
        return redirect(route('comment'))->with('success', $msg);
    }



    


    public function updatestatus(Comment $comment)
    {
        if ($comment->status == 1) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }

        $comment->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('comment'))->with('success', $msg);
    }
}
