@extends('layouts.app_public')

@section('content')
<link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" /> 
<div class="products-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-12 section-title">
                        <h2>{{__('public_pages.all_products')}}</h2>
                       
                    </div>

                    @php
                    if(!$products->isEmpty()) {
                    @endphp
                    @foreach ($products as $product)
                    <div class="col-xs-6 col-md-4 product-container">
                        <div class="product">
                            <div class="img-container">
                                <a href="{{ lang_url($product->url) }}">
                                    <img src="{{asset('products/'.$product->image)}}" alt="{{$product->name}}">
                                </a>
                            </div>
                            <a href="{{ lang_url($product->url) }}">
                                <h1>{{$product->name}}</h1>
                            </a>
                            <span class="price">{{$product->price}}</span>
                            @php
                            if($product->link_to != null) {
                            @endphp
                            <a href="{{lang_url($product->url)}}" class="buy-now" title="{{$product->name}}">{{__('public_pages.buy')}}</a>
                            @php
                            } else {
                            @endphp
                            <a href="javascript:void(0);" data-product-id="{{$product->id}}" class="buy-now to-cart">{{__('public_pages.buy')}}</a>
                            @php
                            }
                            @endphp
                        </div>
                    </div> 
                    @endforeach
                    @php
                    } else {
                    @endphp 
                    <div class="col-xs-12">
                        <div class="alert alert-danger">{{__('public_pages.no_products')}}</div>
                    </div>
                    @php
                    }
                    @endphp
                </div> 
            </div>
        </div> 
    </div>
</div>
<script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
@endsection