@extends('home.headerFooter3')
@section('body')

    <link href="{{url('public/home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/home/css/heroic-features.css')}}" rel="stylesheet">


    <div class="container" style="margin-right: 300px">

        @foreach($pages as $page)
        <div class="col-lg-4 col-md-5 mb-4 text-lg-center">
            <div class="card h-100">
               <a href="{{route('page_view_details',['id'=>$page->id])}}"><img class="card-img-top" src="{{asset($page->blog_image)}}" alt="" height="425" width="350"></a>
                <div class="card-body">
                    <h4 class="card-title">{{$page->blog_name}}</h4>
                    <p class="card-text">{{$page->blog_description}}.</p>
                </div>
                <div class="card-footer">
                    <a href="{{route('page_view_details',['id'=>$page->id])}}" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>

        </div>

    @endforeach

    </div>








@endsection
