@extends('home.headerFooter')
@section('body')


    @foreach($allCrops as $allCrop)
        <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <img  src="{{asset($allCrop->blog_image)}} " width="1000" height="400" >
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="" class="link-product-add-cart">View</a>
                        </div>
                    </div>
                </div>
                <div class="item-info-product ">
                    <h4 style="color: limegreen">{{$allCrop->blog_name}}</h4>
                    <div class="info-product-price">
                        <span class="item_price">{{$allCrop->blog_description}}</span>
                    </div>


                </div>
                <div>
                    <a href="{{route('home_details',['id'=>$allCrop->id])}}" class="col-md-offset-5 item_add single-item hvr-outline-out">Details</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
