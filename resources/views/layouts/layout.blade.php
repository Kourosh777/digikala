<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/bootstrap-rtl.css">
    <link href="./style/css/all.css" rel="stylesheet">
    --}}
    {{--    <link rel="stylesheet" href="{{ asset('./assets/css/app.css') }}">--}}

    {{--<link href="./style/css/swiperjs.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/css/font.css">--}}

    <link rel="stylesheet" href="{{ asset('./assets/css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @stack('stylesheets')


    {{--<link rel="stylesheet" href="{{ asset('./assets/css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @if(Route::getCurrentRoute()->uri == 'single-product')
        <link rel="stylesheet" href="{{ asset('assets/css/single-product.css') }}">
    @endif--}}
    <title>@yield('title','digikala')</title>
</head>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="250">
<!-- header and navbar 10 -->
{{--<header class="sticky-top d-none d-sm-block">
    <div class="component10">
        <div class="component-body10">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-7">
                            <div class="header-right d-flex align-items-center">
                                <div class="logo">
                                    <a href="">
                                        <img src="./style/images/logo.svg" width="110" alt="">
                                    </a>
                                </div>

                                <div class="input-group header-search">
                                    <div class="input-group-prepend">
                                            <span
                                                class="input-group-text border-left-0 search-icon header-search-border"
                                                id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control input-group-text border-right-0 text-right search-input header-search-border"
                                           placeholder="جستجو در دیجی کالا ..." aria-label="Username"
                                           aria-describedby="basic-addon1">
                                </div>

                            </div>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="header-left d-flex justify-content-end align-items-center">
                                <div class=" align-self-center">
                                    <a href="" class="header-btn"><i class="fa fa-user ml-3"
                                                                     aria-hidden="true"></i>ورود به حساب کاربری</a>
                                </div>
                                <div class="header-icon-shop mr-5">
                                    <a href="" class="header-icon-shop-color">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row navbar-container">
                <div class="col">
                    <nav>
                        <div class="nav-container row justify-content-between">
                            <div class="nav-menu col-8">
                                <ul class="nav-list list-unstyled d-flex mb-0">
                                    <li class="nav-item  dropdown">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-bars" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                        <div class="dropdown-details">
                                            <div class="dropdown-categories d-flex flex-column">
                                                <a href="" data-index="1"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                                <a href="" data-index="2"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>خودرو، ابزار و تجهیزات صنعتی </a>
                                                <a href="" data-index="3"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>مد و پوشاک </a>
                                                <a href="" data-index="4"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                                <a href="" data-index="5"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                            </div>

                                            <div class="dropdown-categories-content is-active" data-index="1">
                                                <div class="dropdown-content-header">
                                                    <a href="">

                                                        همه دسته‌بندی‌های کالای دیجیتال
                                                        <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <ul
                                                    class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>
                                                    <li><a href="">
                                                            کیف و کاور گوشی
                                                        </a></li>


                                                </ul>
                                            </div>
                                            <div class="dropdown-categories-content" data-index="2">
                                                <div class="dropdown-content-header">
                                                    <a href="">

                                                        همه دسته‌بندی‌های وسایل نقلیه و صنعتی

                                                        <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <ul
                                                    class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>
                                                    <li><a href="">
                                                            خودرو های ایرانی و خارجی
                                                        </a></li>


                                                </ul>
                                            </div>
                                            <div class="dropdown-categories-content" data-index="3">
                                                <div class="dropdown-content-header">
                                                    <a href="">

                                                        همه دسته‌بندی‌های مد و پوشاک

                                                        <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <ul
                                                    class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>
                                                    <li><a href="">
                                                            لباس مردانه
                                                        </a></li>


                                                </ul>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-left">

                                <a href="">
                                    <div class="nav-item-name">

                                        لطفا شهر و استان خود را انتخاب کنید
                                        <i class="fa fa-map-marker-alt mr-2" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>--}}
<header class="sticky-top d-none d-sm-block">
    <div class="component10">
        <div class="component-body10">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-7">
                            <div class="header-right d-flex align-items-center">
                                <div class="logo">
                                    <a href="">
                                        <img src="./style/images/logo.svg" width="110" alt="">
                                    </a>
                                </div>

                                <div class="input-group header-search">
                                    <div class="input-group-prepend">
                                            <span
                                                class="input-group-text border-left-0 search-icon header-search-border"
                                                id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control input-group-text border-right-0 text-right search-input header-search-border"
                                           placeholder="جستجو در دیجی کالا ..." aria-label="Username"
                                           aria-describedby="basic-addon1">
                                </div>

                            </div>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="header-left d-flex justify-content-end align-items-center">
                                <div class=" align-self-center">
                                    <a href="" class="header-btn"><i class="fa fa-user ml-3"
                                                                     aria-hidden="true"></i>ورود به حساب کاربری</a>
                                </div>
                                <div class="header-icon-shop mr-5">
                                    <a href="" class="header-icon-shop-color">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row navbar-container">
                <div class="col">
                    <nav>
                        <div class="nav-container row justify-content-between">
                            <div class="nav-menu col-8">
                                <ul class="nav-list list-unstyled d-flex mb-0">
                                    <li class="nav-item  dropdown">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-bars" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                        <div class="dropdown-details">
                                            <div class="dropdown-categories d-flex flex-column">
                                                <a href="" data-index="1"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                                <a href="" data-index="2"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>خودرو، ابزار و تجهیزات صنعتی </a>
                                                <a href="" data-index="3"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>مد و پوشاک </a>
                                                <a href="" data-index="4"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                                <a href="" data-index="5"><i class="fa fa-laptop ml-2"
                                                                             aria-hidden="true"></i>کالای
                                                    دیجیتال </a>
                                            </div>
                                            <div class="dropdown-content-container">
                                                <div class="dropdown-categories-content is-active" data-index="1">
                                                    <div class="dropdown-content-header">
                                                        <a href="">

                                                            همه دسته‌بندی‌های کالای دیجیتال
                                                            <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <ul
                                                        class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                        <li class="navlist-title"><a href="">
                                                                لوازم جانبی گوشی </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">

                                                                پاور بانک (شارژر همراه)
                                                            </a></li>
                                                        <li><a href="">

                                                                پایه نگهدارنده گوشی

                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                گوشی موبایل </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">

                                                                سامسونگ
                                                            </a></li>
                                                        <li><a href="">
                                                                هوآوی
                                                            </a></li>
                                                        <li><a href="">
                                                                اپل
                                                            </a></li>
                                                        <li><a href="">
                                                                شیائومی
                                                            </a></li>
                                                        <li><a href="">
                                                                آنر
                                                            </a></li>
                                                        <li><a href="">
                                                                نوکیا
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                واقعیت مجازی </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                مچ‌بند و ساعت هوشمند </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                هدفون، هدست، هندزفری </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                اسپیکر بلوتوث و با سیم </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                هارد، فلش و SSD </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                دوربین </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                دوربین عکاسی دیجیتال
                                                            </a></li>
                                                        <li><a href="">
                                                                دوربین‌ ورزشی و فیلم برداری
                                                            </a></li>
                                                        <li><a href="">
                                                                دوربین‌ چاپ سریع
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                لوازم جانبی دوربین </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                لنز
                                                            </a></li>
                                                        <li><a href="">
                                                                کیف
                                                            </a></li>
                                                        <li><a href="">
                                                                کارت حافظه
                                                            </a></li>
                                                        <li><a href="">
                                                                کاغذ چاپ عکس
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                دوربین دو چشمی و شکاری </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                تلسکوپ </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                پلی استیشن، ایکس باکس و بازی </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                کامپیوتر و تجهیزات جانبی </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                تجهیزات مخصوص بازی
                                                            </a></li>
                                                        <li><a href="">
                                                                مانیتور
                                                            </a></li>
                                                        <li><a href="">
                                                                کیس‌های اسمبل شده
                                                            </a></li>
                                                        <li><a href="">
                                                                قطعات داخلی کامپیوتر
                                                            </a></li>
                                                        <li><a href="">
                                                                کیف
                                                            </a></li>
                                                        <li><a href="">
                                                                کیف
                                                            </a></li>


                                                    </ul>
                                                </div>
                                                <div class="dropdown-categories-content" data-index="2">
                                                    <div class="dropdown-content-header">
                                                        <a href="">

                                                            همه دسته‌بندی‌های وسایل نقلیه و صنعتی

                                                            <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <ul
                                                        class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                        <li class="navlist-title"><a href="">
                                                                خودروهای ایرانی و خارجی </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                موتور سیکلت </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li class="navlist-title"><a href="">
                                                                لوازم جانبی خودرو و موتورسیکلت </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                لوازم تزیینی
                                                            </a></li>
                                                        <li><a href="">
                                                                سیستم صوتی و تصویری
                                                            </a></li>
                                                        <li><a href="">
                                                                نظافت و نگهداری خودرو
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                لوازم یدکی خودرو و موتورسیکلت </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                دیسک و صفحه کلاچ
                                                            </a></li>
                                                        <li><a href="">
                                                                جلوبندی و تعلیق
                                                            </a></li>
                                                        <li><a href="">
                                                                چراغ خودرو
                                                            </a></li>
                                                        <li><a href="">
                                                                تسمه خودرو
                                                            </a></li>
                                                        <li><a href="">
                                                                کمک فنر
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                لوازم مصرفی خودرو و موتورسیکلت </a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                لاستیک و تایر
                                                            </a></li>
                                                        <li><a href="">
                                                                لنت ترمز
                                                            </a></li>
                                                        <li><a href="">
                                                                روغن موتور و ضد یخ
                                                            </a></li>
                                                        <li><a href="">
                                                                مکمل سوخت و روغن و انواع فیلتر
                                                            </a></li>
                                                        <li class="navlist-title"><a href="">
                                                                ابزار برقی</a>
                                                            <i class="fas fa-angle-left pr-2"></i>
                                                        </li>
                                                        <li><a href="">
                                                                دریل، پیچ گوشتی برقی و شارژی
                                                            </a></li>
                                                        <li><a href="">
                                                                فرز و سنگ رومیزی
                                                            </a></li>
                                                        <li><a href="">
                                                                موتور برق
                                                            </a></li>


                                                    </ul>
                                                </div>
                                                <div class="dropdown-categories-content" data-index="3">
                                                    <div class="dropdown-content-header">
                                                        <a href="">

                                                            همه دسته‌بندی‌های مد و پوشاک

                                                            <i class="fa fa-angle-left mr-2" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <ul
                                                        class="list-unstyled dropdown-content pt-0 d-flex flex-column flex-wrap">
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>
                                                        <li><a href="">
                                                                لباس مردانه
                                                            </a></li>


                                                    </ul>
                                                </div>
                                                <div class="nav-adds-container add-active" data-index="1">
                                                    <div class="add banner">
                                                        <a href="">
                                                            <div class="banner-item">
                                                                <img src="./style/images/26.jpg" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="adds-brand-container">
                                                        <h3></h3>
                                                        <div class="adds-brand">
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nav-adds-container" data-index="2">
                                                    <div class="add banner">
                                                        <a href="">
                                                            <div class="banner-item">
                                                                <img src="./style/images/27.jpg" alt="" width="400">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="adds-brand-container">
                                                        <h3></h3>
                                                        <div class="adds-brand">
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="">
                                                                <div class="brand-item">
                                                                    <img src="" alt="">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <div class="nav-item-name">
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                                دسته بندی کالاها
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-left">

                                <a href="">
                                    <div class="nav-item-name">

                                        لطفا شهر و استان خود را انتخاب کنید
                                        <i class="fa fa-map-marker-alt mr-2" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->


@yield('content')




<!-- component 7 -->

<div class="component7">
    <div class="component-body2">
        <div class="row my-border-top">
            <div class="col">
                <div class="footer-links">
                    <div class="footer-link-header mb-2">راهنمای خرید از دیجی‌کالا</div>
                    <ul class="list-unstyled link-unstyled">
                        <li><a href="">نحوه ثبت سفارش</a></li>
                        <li><a href="">رویه ارسال سفارش</a></li>
                        <li><a href="">شیوه های پرداخت</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-links">
                    <div class="footer-link-header mb-2">خدمات مشتریان</div>
                    <ul class="list-unstyled link-unstyled">
                        <li><a href="">رویه‌های بازگرداندن کالا</a></li>
                        <li><a href="">شرایط استفاده</a></li>
                        <li><a href="">حریم خصوصی</a></li>
                        <li><a href="">گزارش باگ</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-none d-sm-flex col">
                <div class="footer-links">
                    <div class="footer-link-header mb-2">با دیجی‌کالا</div>
                    <ul class="list-unstyled link-unstyled">
                        <li><a href=""> اتاق خبر دیجی‌کالا</a></li>
                        <li><a href="">فروش در دیجی‌کالا</a></li>
                        <li><a href="">فرصت‌های شغلی</a></li>
                        <li><a href="">تماس با دیجی‌کالا</a></li>
                        <li><a href="">درباره دیجی‌کالا</a></li>
                        <li><a href="">راهنمای هویت بصری</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm">
                <form action="">
                    <fieldset>
                        <legend class="fieldset pt-4">
                            <div>از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:</div>
                        </legend>
                        <div class="input-group mb-4 mt-3 footer-input">
                            <input type="text" class="form-control" placeholder="آدرس ایمیل خود را وارد کنید"
                                   aria-label="آدرس ایمیل خود را وارد کنید" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary footer-btn" type="button">ارسال</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="footer-social">
                    <div>
                        دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:
                    </div>
                    <div class="social-icons mt-4">
                        <a href="" class="ml-3">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="ml-3">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="ml-3">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="ml-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="footer-address pt-4">
                <ul class="list-unstyled footer-contact d-flex flex-column flex-sm-row justify-content-center">
                    <li>
                        هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم
                    </li>
                    <li class="pr-sm-4">
                        شماره تماس :
                        ۶۱۹۳۰۰۰۰ - ۰۲۱
                    </li>
                    <li class="pr-sm-4">
                        آدرس ایمیل :
                        info@digikala.com
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col">
                    <div class="footer-address-image d-none d-sm-flex justify-content-center">
                        <a href="">
                            <img class="img-fluid" src="./style/images/2.png" alt="" width="150">
                        </a>
                        <a href="">
                            <img class="img-fluid" src="./style/images/1.svg" alt="" width="150">
                        </a>
                        <a href="">
                            <img class="img-fluid" src="./style/images/2.svg" alt="" width="150">
                        </a>
                        <a href="">
                            <img class="img-fluid" src="./style/images/3.png" alt="" width="150">
                        </a>
                    </div>
                    <div class="footer-address-image-responsive d-flex flex-column d-sm-none justify-content-center align-items-center">

                        <div class="d-flex">
                            <a href="">
                                <img class="img-fluid" src="./style/images/2.png" alt="" width="150">
                            </a>
                            <a href="">
                                <img class="img-fluid" src="./style/images/1.svg" alt="" width="150">
                            </a>
                        </div>
                        <div class="d-flex">
                            <a href="">
                                <img class="img-fluid" src="./style/images/2.svg" alt="" width="150">
                            </a>
                            <a href="">
                                <img class="img-fluid" src="./style/images/3.png" alt="" width="150">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- component 8 -->

<div class="component8 ">
    <div class="component-body3 component8-padding-responsive">
        <div class="row mx-0">
            <div class="col-sm-8 p-0">
                <div class="end-footer-content">
                    <h1>فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</h1>
                    <p>
                        دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی
                        به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با
                        فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت
                        دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند
                        در اینجا پیدا خواهید کرد.
                    </p>
                    <div class="link-unstyled mb-3">
                        <a href="">اسباب بازی</a>
                        <a href="">عطر و ادوکلن</a>
                        <a href="">تلویزیون</a>
                        <a href="">رنگ مو و ابرو</a>
                        <a href="">مانتو</a>
                        <a href="">لوازم جانبی ماسک تنفسی</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <aside>
                    <ul class="list-unstyled d-flex footer-safety-partner">
                        <li class="d-flex">
                            <img class="img-fluid img8 img10" width="90" src="./style/images/4.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid" width="125" src="./style/images/5.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid" width="125" src="./style/images/6.png" alt="">
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="footer-partners pt-2">
                    <ul class="list-unstyled d-flex justify-content-between flex-wrap">
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/3.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/4.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/5.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/6.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/7.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="img-fluid" src="./style/images/8.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="copyright-text">
                استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع
                بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.

            </div>
        </div>
    </div>
</div>



</div>


{{--<script src="./style/js/jquery-3.5.1.min.js"></script>
<script src="./style/js/popper.js"></script>
<script src="./style/js/bootstrap.js"></script>--}}
<script src="{{ asset('./assets/js/app.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@stack('scripts')


{{--@if(Route::getCurrentRoute()->uri == 'digikala')
    <script src="{{ asset('./assets/js/index.js') }}"></script>
@elseif(Route::getCurrentRoute()->uri == 'single-product')
    <script src="{{ asset('./assets/js/single-product.js') }}"></script>
@endif--}}
</body>

</html>
