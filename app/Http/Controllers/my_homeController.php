<?php

namespace App\Http\Controllers;

use App\category_add;
use App\gallary_add;
use App\blogs_add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class my_homeController extends Controller
{
    //

    public function headFoot(){
        $blogs=category_add::all();
        return view('home.headerFooter3',['allBlogs'=>$blogs]);
    }

    public function index(){
        $blogs=category_add::all();
        return view('home.index',['allBlogs'=>$blogs]);
    }

    public function services(){
        $blogs=category_add::all();
        return view('home.service',['allBlogs'=>$blogs]);
    }

    public function contact_us(){
        $blogs=category_add::all();
        return view('home.contact',['allBlogs'=>$blogs]);
    }

    public function about_us(){
        $blogs=category_add::all();
        return view('home.about_us',['allBlogs'=>$blogs]);
    }

    public function gallary(){
        $images= gallary_add::all();
        $blogs=category_add::all();
        return view('home.gallary',['images'=>$images , 'allBlogs'=>$blogs]);
    }

    public function search(Request $request)
    {
        $blogs=category_add::all();
        $search_tx1 = $request->search1;

        $search = blogs_add::orderBy('blog_name', 'blog_type', 'ASC')
            ->where('blog_name', 'Like', '%' . $search_tx1 . '%')
            ->orwhere('blog_type', 'Like', '%' . $search_tx1 . '%')
            ->get();
            return view('home.search', ['s' => $search ,'allBlogs'=>$blogs]);
    }
}
