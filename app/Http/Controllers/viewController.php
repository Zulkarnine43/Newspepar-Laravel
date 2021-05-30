<?php

namespace App\Http\Controllers;

use App\blogs_add;
use App\category_add;
use App\page_comments;
use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    public function page_view($name){
        $blogs=category_add::all();
        $pages= blogs_add::where('blog_type',$name )->get();
        return view('user.page_view',['pages'=>$pages, 'allBlogs'=>$blogs]);
    }

    public function page_view_details($id){
        $blogs=category_add::all();
        $comments=page_comments::where('page_id',$id)->get();
        $pages= blogs_add::find($id);
        return view('user.page_view_details',['pages'=>$pages, 'allBlogs'=>$blogs,'comments'=>$comments]);
    }

}
