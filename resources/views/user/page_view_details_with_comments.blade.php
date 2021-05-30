@extends('home.headerFooter3')
@section('body')

    <link href="{{url('public/home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/home/css/heroic-features.css')}}" rel="stylesheet">


    <h3 class="text-success">{{Session::get('message')}}</h3>
    <img class="col-lg-offset-3" src="{{asset($pages->blog_image)}}" alt="" height="425" width="500">
    <header class="jumbotron my-4">
        <h1 class="display-3">{{$pages->blog_name}}</h1>
        <p class="lead">{{$pages->blog_description}}.</p>
        <p> {{$pages->long_description}}.</p>
    </header>

    @foreach($comments as $comment)

        <div class="text-danger ">
            <span class="text-success" >{{$comment->name}}</span>
        </div>

        <div class="text-success">
            <span class=" col-md-offset-6">{{$comment->comment}}</span>
        </div>
    @endforeach



    <div class="contact-left1">
        <h3>Comment <span>Any questions</span></h3>
        <form action="{{route('comment_save')}}" method="get">
            @csrf
            <div class="in-left">

                <input type="hidden" name="page_id" value="{{$pages->id}}">
                <p class="your-para">Your Name :</p>
                <input type="text" name="name" value="" >
                <p class="your-para">Your Mail :</p>
                <input type="text" name="email" value="" >
                <p class="your-para">Phone Number:</p>
                <input type="text" name="mobile" value="">
            </div>
            <div class="in-right">
                <textarea cols="77" rows="6" name="comment"></textarea>
                <input type="submit" value="Submit">

            </div>
        </form>
    </div>





@endsection
