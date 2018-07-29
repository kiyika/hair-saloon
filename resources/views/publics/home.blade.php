@extends('layouts.app_public')

@section('content')
<div class="home-page">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 section-title">
                <br><h2>{{__('public_pages.most_selled')}}</h2>
            </div>
            @foreach ($mostSelledProducts as $mostSelledProduct)
            <div class="col-xs-6 col-sm-4 col-md-3 product-container">
                 <div class="product">
                    <div class="img-container">
                        <a href="{{ lang_url($mostSelledProduct->url) }}">
                            <img src="{{asset('products/'.$mostSelledProduct->image)}}" alt="{{$mostSelledProduct->name}}">
                        </a>
                    </div>
                    <a href="{{ lang_url($mostSelledProduct->url) }}">
                        <h1>{{$mostSelledProduct->name}}</h1>
                    </a>
                    <span class="price">&euro;{{$mostSelledProduct->price}}</span>
                    @php
                    if($mostSelledProduct->link_to != null) {
                    @endphp
                    <a href="{{lang_url($mostSelledProduct->url)}}" class="buy-now" title="{{$mostSelledProduct->name}}">{{__('public_pages.buy')}}</a>
                    @php
                    } else {
                    @endphp
                    <a href="javascript:void(0);" data-product-id="{{$mostSelledProduct->id}}" class="buy-now to-cart">{{__('public_pages.buy')}}</a>
                    @php
                    }
                    @endphp
                </div>
            </div>
            @endforeach
        </div> 
    </div>
</div>
@endsection
