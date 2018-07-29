@extends('layouts.app_public')

@section('content')
<div class="contacts-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title">
                <h2>{{__('public_pages.sitemap')}}</h2>
            </div>
            <div class="col-xs-12">
            <li><a href="{{ lang_url('/') }}">{{__('public_pages.home')}}</a></li>
            <li><a href="{{ lang_url('products') }}">{{__('public_pages.products')}}</a></li>
            <ul>
                @foreach ($products as $product)
                <li><a href="{{ lang_url($product->url) }}">{{$product->name}}</a></li>
                @endforeach
            </ul>
            <li><a href="{{ lang_url('checkout') }}">{{__('public_pages.checkout')}}</a></li>
            <li><a href="{{ lang_url('sitemap') }}">{{__('public_pages.sitemap')}}</a></li>
            <li><a href="{{ lang_url('contacts') }}">{{__('public_pages.contacts')}}</a></li>
            </div>
        </div>
    </div>
</div>
@endsection
