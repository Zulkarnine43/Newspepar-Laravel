@extends('home.headerFooter3')
@section('body')

    <h1>{{Session::get('no_match')}}</h1>

    <div class="login">
        <div class="login-grids">
            <div class="col-md-6 log">
                <form action="{{route('admin_Change_password_save')}}" method="POST">
                    @csrf
                    <h5>Email:</h5>
                    <input type="text" name="email" value=""><br>
                    <h5>New Password:</h5>
                    <input type="password" name="password" value=""><br>
                    <input type="submit" value="Change password">
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
                <a href="{{route('admin_register')}}" class="hvr-bounce-to-bottom button">Create An Account</a>
            </div>
        </div>
    </div>

@endsection

