
@extends('layouts.layout')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/css/responsive-single-product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('./assets/js/responsive-single-product.js') }}"></script>
    <script src="{{ asset('./assets/js/index.js') }}"></script>
@endpush
@section('title','دیجی کالا')
@section('content')
    <header class="my-header d-lg-none">
        <div class="burger-overlay">

        </div>
        <nav class="burger-menu">
            <div class="burger-menu-logo">
                <img src="./style/images/16.svg" alt="">
            </div>
            <div class="burger-menu-content">
                <ul class="burger-menu-list">
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon icon-lemon"></i>
                            سوپرمارکت
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="fas fa-percent"></i>
                            پیشنهادها و تخفیف‌‌ها
                            <!-- <i class="fa fa-angle-down icon-angle-down"></i> -->
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌کالای من
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌پلاس
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌کلاب
                            <span class="burger-menu-digiclub-points">
                                <span class="digiclub-points">۵۴</span>
                                امتیاز
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌پی
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            مگنت
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            فروشنده شوید
                        </a>
                    </li>
                </ul>
                <ul class="burger-menu-list">
                    <li>
                        <div class="burger-menu-title">
                            دسته‌بندی‌ کالاها
                        </div>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category ">
                            کالای دیجیتال
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            خودرو، ابزار و تجهیزات صنعتی
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            مد و پوشاک
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            اسباب بازی، کودک و نوزاد
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            کالاهای سوپرمارکتی
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            زیبایی و سلامت
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            خانه و آشپزخانه
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            کتاب، لوازم تحریر و هنر
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            ورزش و سفر
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="header-nav-container">
            <div class="header-nav">
                <nav class="header-burger">
                    <i class="fas fa-bars icon-burger"></i>
                </nav>
                <div class="header-logo">
                    <a href="" class="header-logo-link"Digikala></a>
                </div>
                <div class="header-faq">
                    <i class="far fa-question-circle icon-header-question"></i>
                </div>
            </div>
            <div class="header-search-input-container">
                <div class="header-search-field-container">
                    <label for="" class="form-field-container">
                        <div class="form-field-frame">
                            <i class="fa fa-search icon-search"></i>
                            <input type="text" placeholder="جستجو در دیجی‌کالا ..." class="header-search-input">
                        </div>
                    </label>
                </div>
                <a href="" class="header-profile">
                    <i class="far fa-user"></i>
                </a>
                <a href="" class="header-cart">
                    <i class="fa fa-shopping-cart"></i>
                </a>

            </div>
        </div>
    </header><header class="my-header">
        <div class="burger-overlay">

        </div>
        <nav class="burger-menu">
            <div class="burger-menu-logo">
                <img src="./style/images/16.svg" alt="">
            </div>
            <div class="burger-menu-content">
                <ul class="burger-menu-list">
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon icon-lemon"></i>
                            سوپرمارکت
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="fas fa-percent"></i>
                            پیشنهادها و تخفیف‌‌ها
                            <!-- <i class="fa fa-angle-down icon-angle-down"></i> -->
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌کالای من
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌پلاس
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌کلاب
                            <span class="burger-menu-digiclub-points">
                                <span class="digiclub-points">۵۴</span>
                                امتیاز
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            دیجی‌پی
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            مگنت
                        </a>
                    </li>
                    <li>
                        <a href="" class="burger-menu-link">
                            <i class="far fa-lemon"></i>
                            فروشنده شوید
                        </a>
                    </li>
                </ul>
                <ul class="burger-menu-list">
                    <li>
                        <div class="burger-menu-title">
                            دسته‌بندی‌ کالاها
                        </div>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category ">
                            کالای دیجیتال
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            خودرو، ابزار و تجهیزات صنعتی
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            مد و پوشاک
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            اسباب بازی، کودک و نوزاد
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            کالاهای سوپرمارکتی
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            زیبایی و سلامت
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            خانه و آشپزخانه
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            کتاب، لوازم تحریر و هنر
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="burger-menu-category">
                            ورزش و سفر
                            <i class="fa fa-angle-down icon-angle-down2"></i>
                        </a>
                        <ul class="burger-menu-sublist">
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    همه موارد این دسته
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    لوازم جانبی گوشی
                                </a>
                            </li>
                            <li>
                                <a href="" class="burger-menu-subcategory">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="header-nav-container">
            <div class="header-nav">
                <nav class="header-burger">
                    <i class="fas fa-bars icon-burger"></i>
                </nav>
                <div class="header-logo">
                    <a href="" class="header-logo-link"Digikala></a>
                </div>
                <div class="header-faq">
                    <i class="far fa-question-circle icon-header-question"></i>
                </div>
            </div>
            <div class="header-search-input-container">
                <div class="header-search-field-container">
                    <label for="" class="form-field-container">
                        <div class="form-field-frame">
                            <i class="fa fa-search icon-search"></i>
                            <input type="text" placeholder="جستجو در دیجی‌کالا ..." class="header-search-input">
                        </div>
                    </label>
                </div>
                <a href="" class="header-profile">
                    <i class="far fa-user"></i>
                </a>
                <a href="" class="header-cart">
                    <i class="fa fa-shopping-cart"></i>
                </a>

            </div>
        </div>
    </header>



    <div class="main-container">
        <!-- component 1 -->
        <div class="component container-fluid">
            <div class="component-body5">
                <div class="row mycontainer">
                    <div class="col-6 col-sm px-2 py-1 medium-image">
                        <a href=""><img class="myimage img-fluid" src="./style/images/1.jpg" width="320px" alt=""></a>
                    </div>
                    <div class="col-6 col-sm px-2 py-1 0 medium-image">
                        <a href=""><img class="myimage img-fluid" src="./style/images/2.jpg" width="320px" alt=""></a>
                    </div>
                    <div class="col-6 col-sm px-2 py-1 0 medium-image">
                        <a href=""><img class="myimage img-fluid" src="./style/images/3.jpg" width="320px" alt=""></a>
                    </div>
                    <div class="col-6 col-sm px-2 py-1 0 medium-image">
                        <a href=""><img class="myimage img-fluid" src="./style/images/4.jpg" width="320px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- component 2 -->

        <div class="component2">
            <div class="component-body6">
                <div class="row">
                    <div class="col px-1 px-sm-2">
                        <a href="">
                            <img class="img-fluid img2" src="./style/images/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col px-1 px-sm-2">
                        <a href="">
                            <img class="img-fluid img2" src="./style/images/6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- component 3 -->
        <div class="component3">
            <div class="component-body7">
                <div class="row mx-1 mx-sm-5">
                    <div class="col-sm-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 img2" src="./style/images/7.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 img2" src="./style/images/8.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 img2" src="./style/images/9.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex mt-4 mt-sm-0">
                        <div class="row flex-sm-column">
                            <div class="col px-1">
                                <a href="">
                                    <img class="img-fluid img3" src="./style/images/11.jpg" width="437" alt="">
                                </a>
                            </div>
                            <div class="col px-1 mt-sm-3">
                                <a href="">
                                    <img class="img-fluid img3" src="./style/images/12.jpg" width="437" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- component 4 -->


        <div class="component4">
            <div class="component-body4">
                <div class="row mx-0 mx-sm-5">
                    <div class="col-5 col-sm-2 d-flex flex-column">
                        <a href="">
                            <img class="img-fluid img4" src="./style/images/1.png" alt="">
                        </a>
                        <button type="button" class="btn btn-outline-light align-self-center mybtn">مشاهده همه >
                        </button>
                    </div>
                    <div class="col-7 col-sm-10 swiper-container swiper-container2">
                        <div class="swiper-wrapper mx-0">
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/13.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/14.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/15.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/16.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/16.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/16.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/16.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                            <div class="card mycard swiper-slide">
                                <img class="card-img-top img5 img-fluid" src="./style/images/16.jpg"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title mytitle"> ساعت هوشمند اسکمی مدل 1301GR</p>
                                    <div class="myprice d-flex justify-content-end">
                                        <del class="text-muted pl-4">۷۰۰,۰۰۰</del>
                                        <span class="badge badge-pill badge-danger">۲۵٪</span>
                                    </div>
                                    <div class="font-weight-bold d-flex justify-content-end">
                                        <span class="real-price">۵۲۷,۰۰۰ </span>
                                        <span class="text-muted pr-3">تومان</span>
                                    </div>
                                    <p class="card-text float-left pt-3 font-weight-bold mytimer"><small
                                            class="text-muted">20:54:28</small></p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- component 5 -->

        <div class="component5">
            <div class="component-body">
                <div class="row">
                    <div class="col py-2">
                        <div class=" my-border-title pb-2">
                            <h5>محصولات پربازدید اخیر</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col swiper-container">
                        <div class=" swiper-wrapper">
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">
                                        <div class="myprice2 d-flex justify-content-end">
                                            <del class="text-muted pl-2">۷۰۰,۰۰۰</del>
                                            <span class="badge badge-pill badge-danger">۲۵٪</span>
                                        </div>
                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">

                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- component 6 -->


        <div class="component6">
            <div class="component-body">
                <div class="row">
                    <div class="col py-2">
                        <div class=" my-border-title pb-2">
                            <h5>محصولات پربازدید اخیر</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col swiper-container">
                        <div class="swiper-wrapper">
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img7" src="./style/images/20.jpg" alt="Card image cap">

                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="component-6-responsive d-block d-sm-none justify-content-center">
            <div class="component-body11">
                <div class="component6-title text-muted">
                    <h4>برند ها</h4>
                </div>
                <div class="row mx-0">
                    <div class="col">
                        <div class="brand-row row ">
                            <div class="brand-item px-2 ">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                            <div class="brand-item px-2">
                                <img class="img-fluid img9" src="./style/images/20.jpg" width="48" alt="Card image cap">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- component 9 -->
        <div class="component9">
            <div class="component-body9">
                <div class="row">
                    <div class="col">
                        <div class="categories-title">
                            بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-group text-center">
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-card2 border-0">
                                <i class="fa fa-laptop category-icon" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title category-name">کالای دیجیتال</h5>
                                    <div class="d-flex justify-content-center text-muted">
                                        <span class="ml-2">+</span>
                                        <p class="card-text">۵۳۴۰۰۰ کالا
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
