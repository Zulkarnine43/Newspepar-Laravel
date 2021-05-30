<?php

namespace App\Http\Controllers;

use App\category_add;
use Illuminate\Http\Request;

class category_edit_deleteController extends Controller
{
    //

    public function edit_category($id){
        $category=category_add::find($id);
        return view('category.edit_category',['category'=>$category]);
    }
    public function update_category_add(Request $request, $id){
        $addCategories = category_add::find($id);

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

        return redirect('/category/manage')->with('message', 'Save Products Info Successfully');
    }

    public function delete_category($id){
        $category=category_add::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'delete Products Info Successfully');
    }
}
