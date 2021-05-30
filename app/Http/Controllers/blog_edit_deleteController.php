<?php

namespace App\Http\Controllers;

use App\blogs_add;
use App\category_add;
use Illuminate\Http\Request;

class blog_edit_deleteController extends Controller
{
    //

    public function edit_blog($id){
        $blog=blogs_add::find($id);
        $catagories=category_add::all();
        return view('blog.edit_blog',['blog'=>$blog,'catagories'=>$catagories]);
    }

    public function update_blog_add(Request $request, $id){
        $addCategories = blogs_add::find($id);

        $productImage = $request->file('blog_image');
        if ($productImage) {
            $imageName = $productImage->getClientOriginalName();
            $directory = 'blog_images/';
            $imageUrl = $directory.$imageName;
            $productImage->move($directory, $imageName);
        }
        $addCategories->blog_name = $request->blog_name;
        $addCategories->blog_type = $request->blog_type;
        $addCategories->blog_description = $request->blog_description;
        $addCategories->long_description = $request->long_description;
        $addCategories->blog_image = $imageUrl;
        $addCategories->save();

        return redirect('/blog/manage')->with('message', 'update Products Info Successfully');
    }

    public function blog_delete($id){
        $row=blogs_add::find($id);
        if($row){
            $row->delete();
        }
        return redirect('/blog/manage')->with('message','delete Successfully');
    }
}
