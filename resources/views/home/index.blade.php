@extends('home.headerFooter3')
@section('body')
    <h4 class="text-success">{{Session::get('login_success')}}</h4>
    <div class="banner-section">
    <div class="banner">
        <div  class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="{{url('public/home/images/1.jpg')}}" class="img-responsive" alt="" />

                </li>
                <li>
                    <img src="{{url('public/home/images/2.jpg')}}" class="img-responsive" alt="" />


                </li>
                <li>
                    <img src="{{url('public/home/images/4.jpg')}}" class="img-responsive" alt="" />


                </li>
                <li>
                    <img src="{{url('public/home/images/1.jpg')}}" class="img-responsive" alt="" />


                </li>
            </ul>
        </div>
        <!--banner-->
        <script src="{{url('public/home/js/responsiveslides.min.js')}}"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager:true,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
    </div>
    </div>
    @endsection
