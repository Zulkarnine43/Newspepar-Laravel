@extends('home.headerFooter3')
@section('body')

    <div class="login">
    <div class="login-grids">
        <div class="col-md-6 log">
            <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
            <h1 class="text-danger">{{Session::get('message')}}</h1>
            <h4 class="text-success">{{Session::get('success')}}</h4>
            <p>If you have previously Login with us, <a href="#">click here</a></p>
            <form action="{{route('user_login_check')}}" method="POST">
                @csrf
                <h5>Email:</h5>
                <input type="text" name="email" value="">
                <h5>Password:</h5>
                <input type="password" name="password" value="">
                <input type="submit" value="Login">

            </form>
            <a href="{{route('forgot_password')}}">Forgot Password ?</a>
        </div>
        <div class="col-md-6 login-right">
            <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
            <a href="{{route('user_register')}}" class="hvr-bounce-to-bottom button">Create An Account</a>
        </div>
    </div>
    </div>


@endsection
