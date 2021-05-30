@extends('admin.headerFooter')
@section('body')
    <h3 class="text-success">{{Session::get('login_success')}}</h3>
@endsection
