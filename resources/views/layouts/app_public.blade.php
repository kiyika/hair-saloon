<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>{{ $head_title }}</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
        <link href="{{ asset('css/public.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row top-part">
                    <div class="col-sm-3 col-md-3">
                        <a href="{{ lang_url('/') }}" class="logo-container">
                            <img src="{{asset('img/logo.png')}}" class="img-responsive logo" alt="{{ $head_title }}">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6   ">
                         <h2>   Hair Saloon Buy Online Products</h2>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="phone-call">
                            <img src="{{ asset('img/phone.png') }}" alt="{{ $head_title }}">
                            <div class="right">
                                <p>{{__('public_pages.phone_order')}}</p>
                                <span>0888 888 888</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-custom">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed show-right-menu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">{{__('public_pages.menu')}}</a>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="{{ lang_url('/') }}">{{__('public_pages.home')}}</a></li>
                            <li><a href="{{ lang_url('show-products') }}">{{__('public_pages.products')}}</a></li>
                            <li><a href="{{ lang_url('checkout') }}">{{__('public_pages.checkout')}}</a></li>
                            <li><a href="{{ lang_url('sitemap') }}">{{__('public_pages.sitemap')}}</a></li>
                            <li><a href="{{ lang_url('contacts') }}">{{__('public_pages.contacts')}}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <div class="pages">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <ul>
                                <li class="header">Hair Saloon Online Shop</li>
                                <li><a href="{{ lang_url('/') }}">{{__('public_pages.home')}}</a></li>
                                <li><a href="{{ lang_url('show-products') }}">{{__('public_pages.products')}}</a></li>
                                <li><a href="{{ lang_url('checkout') }}">{{__('public_pages.checkout')}}</a></li>
                                <li><a href="{{ lang_url('sitemap') }}">{{__('public_pages.sitemap')}}</a></li>
                                <li><a href="{{ lang_url('contacts') }}">{{__('public_pages.contacts')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-rights">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright 2018 hairsaloon.ie
                        </div>
                        <div class="col-sm-6">
                            Institute of Technology, Blanchardstown
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="backdrop"></div>
        <!-- Modal After buy now button -->
        <div class="modal fade" id="modalBuyBtn" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h4>{{__('public_pages.success_add_to_cart')}}</h4>
                        <a href="{{lang_url('checkout')}}" class="go-buy">{{__('public_pages.go_buy')}}</a>
                        <hr>
                        <div class="continue-shopping">
                            <a href="javascript:void(0);" data-dismiss="modal">
                                {{__('public_pages.continue_shopping')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('msg'))
        <div class="alert {{ session('result') === true ? "alert-success" : "alert-danger" }} alert-top">  
            @if (is_array(session('msg')))
            {!! implode('<br>',session('msg')) !!}
            @else
            {{session('msg')}}
            @endif
        </div>
        @endif
        <script>
            var urls = {
            addProduct: "{{ url('addProduct') }}",
                    removeProductQuantity: "{{ url('removeProductQuantity') }}",
                    getProducts: "{{ url('getGartProducts') }}",
                    getProductsForCheckoutPage: "{{ url('getProductsForCheckoutPage') }}",
                    removeProduct: "{{url('removeProduct')}}"
            };
            var variables = {
            addressReq: "{{__('public_pages.address_field_req')}}",
                    phoneReq: "{{__('public_pages.phone_field_req')}}",
                    productsReq: "{{__('public_pages.productsReq')}}"
            };
        </script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/placeholders.min.js') }}"></script>
        <script src="{{ asset('js/public.js') }}"></script>
    </body>
</html>
