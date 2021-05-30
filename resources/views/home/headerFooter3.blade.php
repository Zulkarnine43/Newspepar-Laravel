<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{url('public/home/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href="{{url('public/home/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{url('public/home/js/jquery.min.js')}}"> </script>
    <!--/script-->
    <script type="text/javascript" src="{{url('public/home/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{url('public/home/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>


</head>
<body>
<!-- header-section-starts -->
<div class="h-top" id="home">
    <div class="top-header">
        <ul class="cl-effect-16 top-nag col-lg-offset-2">
            <li><a href="{{route('gallary')}}" data-hover="Gallery">Gallery</a></li>
            <li><a href="{{route('about_us')}}" data-hover="About">About</a></li>
            <li><a href="{{route('services')}}" data-hover="SERVICES">SERVICES</a></li>
            <li><a href="{{route('user_register')}}" data-hover="Registration">Registration</a></li>
            <li><a href="{{route('user_login')}}" data-hover="Login">Login</a></li>
            <li><a href="{{route('contact_us')}}" data-hover="CONTACT">Contact</a></li>
            <li><a href=""><img src="{{url('public/home/images/profile.png')}}" height="17" >profile</a></li>
        </ul>
        <div class="search-box">
            <div class="b-search">
                <form action="{{route('search')}}" method="get">
                    @csrf
                    <input type="text" name="search1" placeholder="Search" >
                    <input type="submit" value="">
                </form>
            </div>
        </div>
    </div>
</div>


<div class="full">
    <div class=" col-sm-offset-0 top-nav">
        <div class="logo">
            <a href="{{route('index')}}"><h1>Blogger</h1></a>
        </div>
        <div class="top-menu">
            <span class="menu"> </span>

            <ul class="cl-effect-16">
                <li><a class="active" href="{{route('index')}}" data-hover="HOME">Home</a></li>
                @foreach ($allBlogs as $allBlog)
                <li><a href="{{route('page_view',['name'=>$allBlog->Category_name])}}" data-hover="">{{$allBlog->Category_name}}</a></li>
                @endforeach
            </ul>
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu ul" ).slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
            <ul class="side-icons">
                <li><a class="fb" href="#"></a></li>
                <li><a class="twitt" href="#"></a></li>
                <li><a class="goog" href="#"></a></li>
                <li><a class="drib" href="#"></a></li>
            </ul>
        </div>
    </div>


    <div class="col-md-9 main">

        @yield('body')


    </div>
</div>



</body>
</html>
