@extends('layouts.app_public')

@section('content')
<div class="product-preview">
    <div class="container">
        <div class="row first-part">
            <div class="col-sm-6">
                <div class="carousel-inner" >
                    <div class="item active">
                        <img src="{{asset('products/'.$product->image)}}" alt="{{$product->name}}" data-num="0" class="img-responsive img-thumbnail" alt="{{$product->name}}">
                    </div>
                </div>
            
            </div>
            <div class="col-sm-6">
                <div class="product-title">
                    <h1>{{$product->name}}</h1>
                </div>
                <div class="price">
                    <span class="detail">&euro;{{$product->price}}</span>
                    <div class="clearfix"></div>
                </div>
                <div class="buy">
                    <div class="quantity">
                        <span>{{__('public_pages.quantity')}}</span>
                        <input type="text" class="field" name="quantity" value="1">
                    </div>
                    @php
                    if($product->link_to != null) {
                    @endphp
                    <a href="{{ $product->link_to }}" class="buy-now">{{__('public_pages.buy')}}</a>
                    @php
                    } else {
                    @endphp 
                    <a href="javascript:void(0);" data-product-id="{{$product->id}}" class="buy-now to-cart">
                        {{__('public_pages.buy')}}
                    </a>
                    @php
                    }
                    @endphp
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>{{__('public_pages.details')}}</h3>
                <div class="details">
                    {{$product->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
