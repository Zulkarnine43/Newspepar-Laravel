@extends('home.headerFooter3')
@section('body')

    <h1 class="text-success">{{Session::get('not_match')}}</h1>
    <h2 class="text-success">{{Session::get('send_link')}}</h2>

    <div class="login">
        <div class="login-grids">
            <div class="col-md-6 log">
                <form action="{{route('admin_password_Link')}}" method="POST">
                    @csrf
                    <h5>Email:</h5>
                    <input type="text" name="email" value=""><br>
                    <input type="submit" value="Send password Link">
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
                <a href="{{route('admin_register')}}" class="hvr-bounce-to-bottom button">Create An Account</a>
            </div>
        </div>
    </div>

@endsection
