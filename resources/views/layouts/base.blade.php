<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Новостной портал</title>
    <link rel="shortcut icon" href="http://static.hommes.kz/s/favicon.png?v=1" type="image/png">


    <meta property="fb:app_id" content="1504499143206143">






    <!-- Bootstrap, Font Awesome, Aminate, Owl Carausel, Normalize CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/normalize.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/slicknav.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Site CSS -->

    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/modernizr-3.5.0.min.js')}}"></script>

    <!--favincon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Response.css')}}">
    <!--Poprup-->
    <link href="{{asset('assets/css/popup.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.bpopup.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('admin-vendor/css/Response.css')}}">
    <script>
        $( document ).ready(function() {
            $('#popup_this').bPopup();
        });
    </script>
    <style>
        @media (max-width: 786px){
            .header .logo {
                float: none !important;
            }
        }
    </style>
</head>
<body>
<style>
    .social li a{
        border-radius: 0px;
        display: flex !important;
        justify-content: center;
        align-content: center;
        align-items: center;
    }
    .badge{
        border-radius: 50%;
    }
</style>
<div class="spinner-cover">
    <div class="spinner-inner">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>
<div class="spinner-cover">
    <div class="spinner-inner">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>
<style>
    .container.animate-box.fadeInUp.animated-fast{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }
</style>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <div class="sidebar-inner">
            <div class="off-canvas-close"><span>Закрыть</span></div>
            <div class="sidebar-widget">
                <div class="widget-title-cover">
                    <h4 class="widget-title"><span>Популярные статьи</span></h4>
                </div>
                <ul class="menu" id="sidebar-menu">
                    <li class="menu-item"><a href="{{route('Home')}}">Главная</a></li>
                    <li class="menu-item menu-item-has-children"><a href="{{route('Home')}}">Категорий</a>
                        <ul class="sub-menu">
                            @foreach($cats as $cat)
                                <li class="menu-item"><a href="{{route('ArticleCategory',$cat->id)}}">{{$cat->name}}</a></li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{route('Popular')}}">Популярные</a></li>
                    <li class="menu-item"><a href="{{route('FreshArticles')}}">Новое</a></li>
                </ul>
            </div>

            <div class="sidebar-widget">
                <div class="widget-title-cover"><h4 class="widget-title"><span>Трендовый</span></h4></div>
                <div class="latest_style_2">



                </div>

            </div> <!--.sidebar-widget-->


        </div>
    </div>		<!--#sidebar-wrapper-->

    <div id="page-content-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

            <div class="container-fluid">
                <div class="container">
                    <div class="top_bar margin-15">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 time">
                                <div class="off-canvas-toggle" id="off-canvas-toggle"><span></span><p class="sidebar-open">БОЛЬШЕ</p></div>
                                <i class="fa fa-clock-o"></i><span>&nbsp;&nbsp;&nbsp; @php echo date('Y-m-d'); @endphp</span>
                            </div>
                            <div class="col-md-6 col-sm-12 social">
                                <ul>
                                    @php
                                        $route = $_SERVER['REQUEST_URI'];




                                        $route = str_replace("public/","" , $route);

                                    @endphp
                                    <a href="{{Route('kz.Home')}}" class="btn btn-primary " style="background-color: #fff;color:#000;border: 1px solid #000; border-radius: 0px;height: auto;width: auto;font-size: 16px;">
                                        Кз
                                    </a>
                                </ul>
                                <div class="top-search">
                                    <i class="fa fa-search"></i><span>ПОИСК</span>
                                </div>
                                <div class="top-search-form">
                                    <form action="{{route('Search')}}" class="search-form" method="get" role="search">
                                        <label>
                                            <span class="screen-reader-text">Искать:</span>
                                            <input type="search" name="search" value="" placeholder="Поиск …" class="search-field">
                                        </label>
                                        <input type="submit" value="Search" class="search-submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 header">
                            <h1 class="logo"><a href="{{route('Home')}}">THE KHAN TIME</a></h1> <br>
                            <p class="tagline">ГАЗЕТА / ЖУРНАЛ / ИЗДАТЕЛЬ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav section_margin">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12 main_nav_cover" id="nav">
                                <ul id="main-menu">
                                    <li class="menu-item-has-children"><a href="{{route('Home')}}">Категорий</a>
                                        <ul class="sub-menu">
                                            @foreach($cats as $cat)
                                            <li><a href="{{route('ArticleCategory',$cat->id)}}">{{$cat->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                   <!-- <li class="menu-item-has-children"><a href="index.html#">Стиль</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="index.html#">Стиль жизни</a>
                                                <ul class="sub-menu">
                                                    <li><a href="category-list.html">Mens looks</a></li>
                                                    <li><a href="category-grid.html">Часы</a></li>
                                                    <li><a href="category-masonry.html">Каменная кладка</a></li>
                                                    <li><a href="category-big.html">Большой </a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"><a href="index.html#">Увлечения</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single.html">Автомобили</a></li>
                                                    <li><a href="post-video.html">Техника</a></li>
                                                    <li><a href="post-audio.html">Женщины</a></li>
                                                    <li><a href="post-gallery.html">Политика</a></li>
                                                    <li><a href="post-image.html">Бизнес</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="index.html#">События</a>
                                                <ul class="sub-menu">
                                                    <li><a href="page-author.html">Автор</a></li>
                                                    <li><a href="page-search.html">Поиск</a></li>
                                                    <li><a href="page-404.html">404</a></li>
                                                    <li><a href="page-contact.html">Контакт</a></li>
                                                    <li><a href="page-typography.html">Типография</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="{{route('Popular')}}">Популярные</a></li>
                                    <li><a href="{{route('FreshArticles')}}">Новое</a></li>
                                    <!--<li class="menu-item-has-children"><a href="category-masonry.html">Спецпроекты</a>
                                        <ul class="sub-menu">
                                            <li><a href="category-big.html">MARTELL "10 лучших ресторанов Казахстана"</a></li>
                                            <li><a href="category-list.html">10 джентльменов Казахстана под эгидой CHIVAS</a></li>
                                            <li><a href="category-grid.html">30 успешных казахстанцев до 30 лет</a></li>
                                            <li><a href="category-list.html">10 ярких и успешных владельцев Jaguar</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="{{route('shop')}}">Store</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container animate-box">
                    <div class="row">
                        <div class="owl-carousel owl-theme js carausel_slider section_margin" id="slider-small">
                            @foreach($NewArticles as $newArticle)
                            <div class="item px-2">
                                <div class="alith_latest_trading_img_position_relative">
                                    <figure class="alith_post_thumb">
                                        <a href="{{route('Article',$newArticle->id)}}"><img width="100" src="{!! $newArticle->path !!}" style="height: 75px;" alt=""/></a>
                                    </figure>
                                    <div class="alith_post_title_small">
                                        <a href="{{route('Article',$newArticle->id)}}"><strong>@php
                                                    echo mb_strimwidth($newArticle['title'],0,20,'...');
                                                @endphp</strong></a>
                                        <p class="meta"><span>{{$newArticle->created_at}}</span> <span>{{$newArticle->views}} просмотров</span></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
            @yield('content')


            <div class="container-fluid alith_footer_right_reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 bottom-logo">
                            <h1 class="logo"><a href="index.html">THE KHAN TIME</a></h1>
                            <div class="tagline social">
                                <ul>
                                    <li class="facebook"><a href=""><i class="fa fa-paper-plane"></i></a></li>
                                    <li class="twitter" ><a href="https://wa.me/77082222225"><i class="fa fa-whatsapp"></i></a></li>
                                    <li class="google-plus"><a href=""><i class="fa fa-envelope "></i></a></li>
                                    <li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 coppyright"> <p>© Copyright 2020, Все права защищены. Сайт создан компанией <a href="https://nextin.me" title="AliTheme">Next in</a></p> </div>
                        <div class="col-lg-12 col-md-12 coppyright">По поводу сотрудничество звонить по номеру <a
                                href="tel:+77082222225">87082222225</a></div>
                    </div>
                </div>
            </div>

            <div class="gototop js-top">
                <a href="index.html#" class="js-gotop"><span>На верх</span></a>
            </div>
    </div> <!--page-content-wrapper-->
    <style>
        .twitter a:hover{
            background: #0f9d58 none repeat scroll 0 0 !important;
            border-color: #0f9d58 !important;


        }
        body{
            background-color:#f3f3f3;
        }
        .container{
            padding-left: 50px;
            padding-right: 50px;
            background-color: #fff;
        }
        .container.animate-box.fadeInUp.animated-fast{
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .section_margin{
            margin-bottom: 0px;
        }
    </style>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/smart-sticky.js')}}"></script>
    <script src="{{asset('assets/js/theia-sticky-sidebar.js')}}"></script>
</div> <!--#wrapper-->
</body>
</html>


