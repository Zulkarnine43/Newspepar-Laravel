@extends('home.headerFooter3')
@section('body')


    <div class="sign-up-form">
    <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
        <h4>{{Session::get('verify')}}</h4>
    <div class="sign-up">
        <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>

        <form action="{{route('registerSave')}}" method="POST">
            @csrf

        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="a">User Name* :</h4>
            </div>
            <div class="sign-up2">
                    <input type="text" name="username" placeholder="Name">
                <span class="text-danger">{{$errors->has('username') ? $errors->first('username'): ' '}}</span>
            </div>
        </div>


            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="a">Mobile* :</h4>
                </div>
                <div class="sign-up2">
                    <input type="Text" name="mobile" placeholder="Mobile" >
                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ' '}}</span>
                </div>
            </div>


        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="c">Email Address* :</h4>
            </div>
            <div class="sign-up2">
                    <input type="text" name="email" placeholder="Email Address" >
                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
            </div>
        </div>


            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="d">Gender* :</h4>
                </div>
                <div class="sign-up2">
                    <input type="radio" name="gender" value="male" >Male
                    <input type="radio" name="gender" value="male">Female
                    <span class="text-danger">{{$errors->has('gender') ? $errors->first('gender') : ' '}}</span>
                </div>
            </div>

        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="d">Password* :</h4>
            </div>
            <div class="sign-up2">
                    <input type="password" name="password" placeholder="Password">
                <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ' '}}</span>
            </div>
        </div>

        <div class="sign-u">
            <div class="sign-up1">
                <h4>Confirm Password* :</h4>
            </div>
            <div class="sign-up2">
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                <span class="text-danger">{{$errors->has('confirm_password') ? $errors->first('confirm_password') : ' '}}</span>
            </div>
        </div>

            <input type="submit" name="btn" value="Submit">

        </form>
    </div>
    </div>


    @endsection
