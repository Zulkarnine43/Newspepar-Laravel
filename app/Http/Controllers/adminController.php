<?php

namespace App\Http\Controllers;

use App\add_crop;
use App\blogs_add;
use App\category_add;
use App\crop_message;
use App\customer_registration;
use App\farmer_registration;
use App\gallary_add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    //
    public function admin(){
        return view('admin.admin');
    }

    public function blog_add(){
        $catagories=category_add::all();
        return view('admin.blog_add',['catagories'=>$catagories]);
    }
    public function save_blog_add(Request $request){
        $addBlogs = new blogs_add();

        $productImage = $request->file('blog_image');
        if ($productImage) {
            $imageName = $productImage->getClientOriginalName();
            $directory = 'blog_images/';
            $imageUrl = $directory.$imageName;
            $productImage->move($directory, $imageName);
        }
        $addBlogs->blog_name = $request->blog_name;
        $addBlogs->blog_type = $request->blog_type;
        $addBlogs->blog_description = $request->blog_description;
        $addBlogs->long_description = $request->long_description;
        $addBlogs->blog_image = $imageUrl;
        $addBlogs->save();

        return redirect('/blog/add')->with('message', 'Save Products Info Successfully');
    }

    public function manage_blog_add(){
        $home_all=blogs_add::all();
        return view('admin.manage_blog_add',['home_all'=>$home_all]);
    }

    public function category_add(){
        return view('category.category_add');
    }

    public function save_category_add(Request $request){
        $addCategories = new category_add();

        $productImage = $request->file('Category_image');
        if ($productImage) {
            $imageName = $productImage->getClientOriginalName();
            $directory = 'Category_images/';
            $imageUrl = $directory.$imageName;
            $productImage->move($directory, $imageName);
        }
        $addCategories->Category_name = $request->Category_name;
        $addCategories->Category_description = $request->Category_description;
        $addCategories->Category_image = $imageUrl;
        $addCategories->save();

        return redirect('/category/add')->with('message', 'Save Products Info Successfully');
    }

    public function manage_category_add(){
        $home_all=category_add::all();
        return view('admin.manage_category_add',['home_all'=>$home_all]);
    }


    public function gallary_add(){
        return view('admin.gallary_add');
    }
    public function gallary_save(Request $request)
    {
        $addProducts = new gallary_add();
        $productImage = $request->file('product_image');
        if ($productImage) {
            $imageName = $productImage->getClientOriginalName();
            $directory = 'gallary_images/';
            $imageUrl = $directory . $imageName;
            $productImage->move($directory, $imageName);
        }
        $addProducts->product_name = $request->product_name;
        $addProducts->crop_type = $request->crop_type;
        $addProducts->product_description = $request->product_description;
        $addProducts->product_image = $imageUrl;
        $addProducts->save();

        return redirect('/gallary/add')->with('message', 'Save gallary Info Successfully');
    }
    public function manage_gallary(){
        $gallaries=gallary_add::all();
        return view('admin.manage_gallary',['gallaries'=>$gallaries]);
    }
    public function gallary_delete($id){
        $row=gallary_add::find($id);
        if($row){
            $row->delete();
        }
        return redirect('/gallary/manage')->with('message','delete Successfully');
    }





}
