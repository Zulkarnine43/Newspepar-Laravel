<?php

namespace App\Http\Controllers;

use App\blogs_add;
use App\category_add;
use App\page_comments;
use Illuminate\Http\Request;

class commentController extends Controller
{
    //
    public function comment_save(Request $request){
        $comment = new page_comments();

        $comment->page_id = $request->page_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->mobile = $request->mobile;
        $comment->comment = $request->comment;
        $comment->save();

        $comments=page_comments::where('page_id',$request->page_id)->get();
        $blogs=category_add::all();
        $pages= blogs_add::find($request->page_id);
       return view('user.page_view_details_with_comments',['comments'=>$comments,'pages'=>$pages, 'allBlogs'=>$blogs])->with('message', 'send message Successfully');

    }
    public function admin_show_page_comments(){
        $comment=page_comments::all();
       // return $blog=blogs_add::where('id',$comment->page_id);
        return view('comment.comment',['home_all'=>$comment]);
    }

    public function delete_comment($id){
        $row=page_comments::find($id);
        if($row){
            $row->delete();
        }
        return redirect('/page/comments')->with('message','delete Successfully');
    }
}
