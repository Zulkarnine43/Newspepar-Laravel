<?php

namespace App\Http\Controllers;

use App\admin_register;
use App\category_add;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class forgot_passwordController extends Controller
{
    //
    public function forgot_password(){
        $blogs=category_add::all();
        return view('user.forgot_password',['allBlogs'=>$blogs]);
    }

    public function password_Link(Request $request){
         $user=user_register::where('email', $request->email)->first();
         if($user){
             $data=$user->toArray();
             Mail::send('user.password_link',$data,function($message) use ($data){
                 $message->to($data['email']);
                 $message->subject('password_link');
             });
             return redirect('/user/forgot/password')->with('send_link','Check your Email Address..We send a Link');
         }
         else {
             $blogs = category_add::all();
             return redirect('/user/forgot/password')->with('not_match','Didn,t Match your Email Address');
         }
    }

    public function change_password(){
        $blogs=category_add::all();
        return view('user.change_password',['allBlogs'=>$blogs]);
    }

    public function Change_password_save(Request $request)
    {
        $user = user_register::where('email', $request->email)->first();
        if($user) {
            $user->password = $request->password;
            $user->save();
            return redirect('/user/login')->with('success','password Change Successfully');
        }
        else{
            return redirect('/user/change/password')->with('no_match','email can not match...please try again');
        }
    }

    public function admin_forgot_password(){
        $blogs=category_add::all();
        return view('admin_login.forgot_password',['allBlogs'=>$blogs]);
    }

    public function admin_password_Link(Request $request){
         $admin=admin_register::where('email', $request->email)->first();
         if($admin){
             $data=$admin->toArray();
            // Mail::send('admin_login.password_link',$data,function($message) use ($data){
                //// $message->to($data['email']);
                // $message->subject('password_link');
            // });
             return redirect('/admin/forgot/password')->with('send_link','Check your Email Address..We send a Link');
         }
         else {
             $blogs = category_add::all();
             return redirect('/admin/forgot/password')->with('not_match','Didn,t Match your Email Address');
         }
    }

    public function admin_change_password(){
        $blogs=category_add::all();
        return view('admin_login.change_password',['allBlogs'=>$blogs]);
    }
    public function admin_Change_password_save(Request $request)
    {
        $admin = admin_register::where('email', $request->email)->first();
        if($admin) {
            $admin->password = $request->password;
            $admin->save();
            return redirect('/admin/login')->with('success','password Change Successfully');
        }
        else{
            return redirect('/admin/change/password')->with('no_match','email can not match...please try again');
        }
    }
}
