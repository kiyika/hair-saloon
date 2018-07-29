<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{__('admin_pages.admin_panel_title').$page_title_lang}}</title>   
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> 
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/adminCustom.css') }}" rel="stylesheet" /> 
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css' />
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-2 left-side">
                            <div class="menu-logo">
                                <a href="">
                                    {{__('admin_pages.admin_panel')}}
                                </a>
                            </div>
                            <ul class="nav">
                                <li>
                                    <a href="{{ lang_url('admin/orders') }}" class="btn waves-effect waves-light">
                                        <i class="material-icons">shopping_basket</i>
                                        <p>{{__('admin_pages.orders')}}</p>
                                    </a> 
                                </li>
                                <li>
                                    <a href="{{ lang_url('admin/users') }}" class="btn waves-effect waves-light">
                                        <i class="material-icons">group</i>
                                        <p>{{__('admin_pages.users')}}</p>
                                    </a> 
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-10 col-sm-offset-3 col-md-offset-3 col-lg-offset-2 right-side">
                            <nav class="navbar">
                                <div class="navbar-header">
                                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <i class="fa fa-lg fa-bars"></i>
                                    </button>
                                    <a class="navbar-brand" href="#">{{$page_title_lang}}</a>
                                </div>
                                <div id="navbar" class="collapse navbar-collapse"> 
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a href="{{url('logout')}}"> 
                                                {{ __('admin_pages.logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <button type="button" class="btn purple-gradient btn-sm menu-btn-xs">{{__('admin_pages.show_mine_menu')}}</button>
                            <div class="right-side-wrapper">
                                @yield('content')
                            </div>
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
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootbox.min.js') }}"></script>
        <script src="{{ asset('js/mdb.min.js') }}"></script> 
        <script>
        var urls = {
            removeGalleryImage: "{{ url('admin/removeGalleryImage') }}",
            editCategory: "{{ lang_url('admin/categories') }}",
            deleteCategories: "{{ lang_url('admin/delete/categories') }}",
            changeStatus: "{{ lang_url('admin/changeOrderStatus') }}"
        };
        var langs = {
            selectOnlyOneCateg: "{{__('admin_pages.select_only_one_category')}}",
            selectJustOneCateg: "{{__('admin_pages.select_just_one_categ')}}",
            confirmDeleteCategories: "{{__('admin_pages.confirm_delete_categories')}}",
            encorrectemailAddr: "{{__('admin_pages.incorrect_email_addr')}}"
        }
        </script>
        <script src="{{ asset('js/placeholders.min.js') }}"></script>
        <script src="{{ asset('js/adminCustom.js') }}"></script> 
    </body>
</html>