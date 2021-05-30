@extends('home.headerFooter3')
@section('body')
    <html>
    <head>
        <style>
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
            }

            div.gallery:hover {
                border: 2px solid blue;
            }

            div.gallery img {
                width: 500px;
                height: 300px;
            }

            div.desc {
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h3 class="heading text-center" style="background-color: darkgray; color: black">Gallary</h3>

    @foreach($images as $image)
    <div class="gallery">
        <a target="_blank" href=" ">
            <img src="{{asset($image->product_image)}}" height="400px" width="350px">
        </a>
    </div>
    @endforeach
    </body>
    </html>


@endsection
