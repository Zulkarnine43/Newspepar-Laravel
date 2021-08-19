<?php

namespace App\Http\Controllers;

use App\admin_register;
use App\category_add;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class admin_loginController extends Controller
{
    //
    public function admin_login(){
        return view('admin_login.admin_login');
    }

    public function admin_register(){
        return view('admin_login.admin_register');
    }

    public function admin_registerSave(Request $request){
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

        $regis = new admin_register();
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

        // $data=$request->toArray();
        // Mail::send('admin_login.verification_mail',$data,function($message) use ($data){
        //     $message->to($data['email']);
        //     $message->subject('verification_mail');
        // });

        return redirect('/admin/register')->with('verify','Please Verify Your Email Account');
    }
    public function admin_registerVerify(){

        /*   $regis = new user_register();
           $regis->username = Session::get('username');
           $regis->mobile = Session::get('mobile');
           $regis->email = Session::get('email');
           $regis->gender = Session::get('gender');
           $regis->password =encrypt( Session::get('password'));
           $regis->confirm_password =encrypt(Session::get('confirm_password'));
           $regis->save();*/

        return view('admin_login.admin_login');
    }

    public function admin_login_check(Request $request){
        $password=encrypt( $request->password);

        $admin = admin_register::where('email',$request->email )->first();
        $admin2= admin_register::where('password',$password)->get();

        if($admin && $admin2){
            Session::put('email', $admin->email);
            Session::put('username',$admin->username);
            return redirect('/admin/page')->with('login_success', 'Login Successfully');
        }
        else {
            return redirect('/admin/login')->with('message', 'required valid password');
        }
    }
}
