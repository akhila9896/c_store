@extends('user.header_footer')
@section('user-body')
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1 class="fashion_taital">Men & Women Fashion</h1>
                <div class="container">
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach($result as $value)
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">{{$value->productname}}</h4>
                                    <h4 class="ext">
                                        {{$value->producttype}}/{{$value->description}}/{{$value->productexpdate}}</h4>
                                    <p class="price_text">${{$value->productprice}}<span style="color: #262626;"></span>
                                    </p>
                                    <p class="price_text">Price <span style="color: #262626;">$
                                            {{$value->productprice}}</span></p>
                                    <div class="tshirt_img"><img src="/uploads/{{$value->productimage}}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="/addtocart/{{$value->id}}">Add to cart</a></div>
                                        <div class="buy_bt"><a href="/buynow/{{$value->id}}">Buy Now</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection