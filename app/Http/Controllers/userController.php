<?php

namespace App\Http\Controllers;

use App\category_add;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    //

    public function user_register(){
        $blogs=category_add::all();
        return view('user.user_register',['allBlogs'=>$blogs]);
    }

    public function registerSave(Request $request){
        $this->validate($request,['email'=>'required|email|max:255|unique:users'],[
            'email.required'=>'Email cannot be empty','email'=>'Email format is not valid.'
        ]);

        $this->validate($request,[
            'username'=>'required|string|max:255',
            'mobile'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'gender'=>'required',
            'password'=>[
                'required',
                'string',
                'min:6',             // must be at least 6 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'confirm_password' =>'required|same:password'
        ]);

        $regis = new user_register();
        $regis->username = $request->username;
        $regis->mobile = $request->mobile;
        $regis->email = $request->email;
        $regis->gender = $request->gender;
        $regis->password =encrypt( $request->password);
        $regis->confirm_password =encrypt($request->confirm_password);
        $regis->save();

        /* Session::put([
             'username'=>$request->username,
              'mobile'=>$request->mobile,
             'email'=>$request->email,
             'gender'=>$request->gender,
             'password'=>$request->password,
             'confirm_password'=>$request->confirm_password
         ]);*/

        $data=$request->toArray();
        Mail::send('user.verification_mail',$data,function($message) use ($data){
            $message->to($data['email']);
            $message->subject('verification_mail');
        });

        return redirect('/user/register')->with('verify','Please Verify Your Email Account');
    }

    public function registerVerify(){

        /*   $regis = new user_register();
           $regis->username = Session::get('username');
           $regis->mobile = Session::get('mobile');
           $regis->email = Session::get('email');
           $regis->gender = Session::get('gender');
           $regis->password =encrypt( Session::get('password'));
           $regis->confirm_password =encrypt(Session::get('confirm_password'));
           $regis->save();*/

        return view('user.login');
    }

    public function user_login(){
        $blogs=category_add::all();
        return view('user.login',['allBlogs'=>$blogs]);
    }

    public function user_login_check(Request $request){
        $password=encrypt( $request->password);

        $user = user_register::where('email',$request->email )->first();
        $user2= user_register::where('password',$password)->get();

        if($user && $user2){
            Session::put('email', $user->email);
            Session::put('username',$user->username);
            return redirect('/')->with('login_success', 'Login Successfully');
        }
        else {
            return redirect('/user/login')->with('message', 'required valid password');
        }
    }
}
