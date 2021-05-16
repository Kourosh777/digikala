@extends('layouts.layout')
@section('title','دیجی کالا')
@push('stylesheets')


    <link rel="stylesheet" href="{{ asset('assets/css/responsive-single-product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/single-product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('./assets/js/single-product.js') }}"></script>
@endpush
@section('content')
    <div class="main  d-none d-md-block">
        <!-- component product -->
        <div class="container-fluid my-container p-0">
            <div class="component-product">
                <div class="component-body-product">
                    <div class="product-nav-container d-flex justify-content-between">
                        <nav class="my-breadcrumb">
                            <ul class="list-unstyled d-flex">
                                <li class="my-breadcrumb-item">
                                    <a href="">دیجی‌کالا</a>
                                </li>
                                <li class="my-breadcrumb-item">
                                    <a href="">کالای دیجیتال</a>
                                </li>
                                <li class="my-breadcrumb-item">
                                    <a href="">موبایل</a>
                                </li>
                                <li class="my-breadcrumb-item">
                                    <a href="">گوشی موبایل</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="sell-your-product">
                            <a href="">کالای خود را در دیجی‌کالا
                                بفروشید</a>
                            <i class="fas fa-box-open" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="row">
                            <div class="col-4">
                                <section class="product-gallery">
                                    <div class="gallery-item d-flex">
                                        <ul class="gallery-options list-unstyled">
                                            <li>
                                                <button class="fa fa-heart" data-toggle="tooltip" data-placement="left"
                                                    title="Tooltip on left"></button>
                                            </li>
                                            <li>
                                                <button class="fa fa-share-alt"></button>
                                            </li>
                                            <li>
                                                <button class="fa fa-bell"></button>
                                            </li>
                                            <li>
                                                <button class="fa fa-chart-line"></button>
                                            </li>
                                            <li>
                                                <button class="fa fa-code-branch"></button>
                                            </li>
                                        </ul>
                                        <div class="gallery-img">
                                            <img class="img-fluid" src="./style/images/21.jpg" alt="">
                                        </div>
                                    </div>
                                    <ul class="galerry-items list-unstyled d-flex">
                                        <li>
                                            <div class="product-image-thumbnail">
                                                <img src="./style/images/21.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-image-thumbnail">
                                                <img src="./style/images/22.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-image-thumbnail">
                                                <img src="./style/images/23.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-image-thumbnail">
                                                <img src="./style/images/24.jpg" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-feedback">
                                        <a href="">
                                            <i class="fas fa-question-circle ml-2" aria-hidden="true"></i>بازخورد درباره
                                            این
                                            کالا</a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-8">
                                <section class="product-info">
                                    <div class="product-title-container">
                                        <div class="brand-breadcrumb">
                                            <nav class="my-breadcrumb">
                                                <ul class="list-unstyled d-flex">
                                                    <li class="my-breadcrumb-item">
                                                        <a href="">سامسونگ</a>
                                                    </li>
                                                    <li class="my-breadcrumb-item">
                                                        <a href="">گوشی موبایل سامسونگ</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="product-title">
                                            <h1>

                                                گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64
                                                گیگابایت

                                            </h1>
                                        </div>
                                    </div>
                                    <div class="product-attributes">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="product-config">
                                                    <span class="product-title-en">
                                                        {{ $product_title }}
                                                    </span>
                                                    <div class="product-engagement d-flex">
                                                        <div class="product-engagement-item">
                                                            <div class="product-engagement-rating">
                                                                <i class="fa fa-star"></i>
                                                                4.5
                                                                <span class="engagement-rating-num">(1653)</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-engagement-item">
                                                            <div class="product-engagement-link">

                                                                ۱۶۹۷
                                                                دیدگاه کاربران

                                                            </div>
                                                        </div>
                                                        <div class="product-engagement-item">
                                                            <div class="product-engagement-link">

                                                                ۴۴۰
                                                                پرسش و پاسخ

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-guaranteed">
                                                        <i class="fa fa-check"></i>
                                                        <span>
                                                            پیشنهاد شده توسط بیش از ۹۲۰ نفر از خریداران
                                                        </span>
                                                    </div>
                                                    <div class="product-config-wrapper">
                                                        <div class="choose-color pt-4">
                                                            <div class="color-title">
                                                                رنگ :
                                                                آبی
                                                            </div>
                                                            <ul class="product-colors list-unstyled d-flex">
                                                                <li class="color-item">
                                                                    <div class="circle-color"></div>
                                                                </li>
                                                                <li class="color-item">
                                                                    <div class="circle-color"></div>
                                                                </li>
                                                                <li class="color-item">
                                                                    <div class="circle-color"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-params py-3">
                                                            <div class="product-params-title mb-3">
                                                                ویژگی های کالا
                                                            </div>
                                                            <ul class="list-unstyled">
                                                                @foreach($product_header_params as $key=> $header_param)
                                                                <li>
                                                                    <span>{{ $key }}</span><span> {{ $header_param }} </span>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="product-additional-info d-flex align-items-center">
                                                            <i class="fa fa-exclamation-circle danger-icon ml-3"></i>
                                                            <div> هشدار سامانه همتا: حتما در زمان تحویل دستگاه، به کمک
                                                                کد
                                                                فعال‌سازی چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از
                                                                طریق #7777*، برای سیم‌کارت خود فعال‌سازی کنید. آموزش
                                                                تصویری
                                                                در آدرس اینترنتی hmti.ir/05
                                                            </div>
                                                        </div>
                                                        <div class="product-plus-box">
                                                            <div
                                                                class="product-plus-row d-flex justify-content-between">
                                                                <span class="product-plus-text">
                                                                    <i class="fa fa-star-of-life ml-1"></i>
                                                                    خدمات ویژه کاربران دیجی‌پلاس
                                                                </span>
                                                                <a href="">
                                                                    شما هم عضو شوید
                                                                    <i class="fa fa-angle-left ml-3"></i>
                                                                </a>
                                                            </div>
                                                            <div class="product-plus-row mr-4">
                                                                <span class="product-plus-description">ارسال
                                                                    رایگان</span>
                                                                <span class="product-plus-description">30 روز امکان
                                                                    بازگشت
                                                                    کالا</span>
                                                                <span class="product-plus-description">امکان ارسال
                                                                    فوری</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="product-summary">
                                                    <div class="summary-box">
                                                        <div class="product-seller-info">
                                                            <div
                                                                class="product-seller-counter d-flex justify-content-between">
                                                                <div>فروشنده</div>
                                                                <a href="">5 فروشنده دیگر</a>
                                                            </div>
                                                            <div
                                                                class="product-seller-row mt-3 product-seller-clickable d-flex align-items-center">
                                                                <i class="fa fa-plus-circle ml-1"></i>
                                                                <div class="w-100">
                                                                    <div
                                                                        class="product-seller-line1 d-flex justify-content-between">
                                                                        <div class="product-seller-name">
                                                                            دیجی کالا
                                                                        </div>
                                                                        <i class="fa fa-angle-left ml-1"></i>
                                                                    </div>
                                                                    <div class="product-seller-line2">
                                                                        <span class="product-seller-score ml-2">عملکرد 5
                                                                            از
                                                                            5</span>
                                                                        <span class="product-seller-rate">87% رضایت از
                                                                            کالا</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-seller-row">
                                                                <div
                                                                    class="product-seller-guarantee d-flex align-items-center">
                                                                    <i class="fa fa-check-circle ml-2"></i>
                                                                    <div class="guarantee-text">
                                                                        گارانتی ۱۸ ماهه داریا همراه پایتخت
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-seller-row product-seller-clickable">
                                                                <div
                                                                    class="product-seller-main d-flex align-items-center">
                                                                    <i class="fa fa-check-square ml-2"></i>
                                                                    <div>موجود در انبار دیجی‌کالا</div>
                                                                    <i class="fa fa-angle-left mr-auto"></i>
                                                                </div>
                                                                <div
                                                                    class="product-sender d-flex align-items-center mr-4 pt-3">
                                                                    <i class="fa fa-truck ml-2"></i>
                                                                    <div>ارسال دیجی‌کالا</div>
                                                                </div>
                                                            </div>
                                                            <div class="pruduct-seller-row-price">
                                                                <div
                                                                    class="product-price d-flex justify-content-end align-items-center">
                                                                    <div class="product-price-value ml-2">۳,۶۳۹,۰۰۰
                                                                    </div>
                                                                    <span class="font-weight-bold">تومان</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-watching-row">
                                                                <div
                                                                    class="product-watching-now d-flex align-items-center">
                                                                    <i class="fa fa-eye"></i>
                                                                    <div class="mr-2">
                                                                        ۵۰+
                                                                        نفر در حال بازدید این کالا می‌باشند.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-add-btn-row">
                                                                <a href=""
                                                                    class="btn btn-danger btn-block add-to-cart-btn">افزودن
                                                                    به سبد خرید</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="product-white-box d-flex align-items-center">
                                                        <i class="fa fa-exclamation-circle ml-3"></i>
                                                        <div class="white-box-text">
                                                            فرآیند قیمت‌گذاری و نظارت بر قیمت‌ها
                                                        </div>
                                                        <i class="fa fa-angle-left ml-2 mr-auto"></i>
                                                    </a>
                                                    <a href=""
                                                        class="product-price-survey-question d-flex align-items-center justify-content-end">
                                                        <div class="price-survey">

                                                            آیا قیمت مناسب‌تری سراغ دارید؟

                                                        </div>
                                                        <i class="fa fa-tag mr-3 ml-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-usp">
                                        <aside class="product-feature-container">
                                            <div class="row">
                                                @for ($i = 0; $i < 5; $i++)
                                                <div class="product-feature col">
                                                    <a href="" class="d-flex align-items-center">
                                                        <i class="fa fa-plane ml-2"></i>
                                                        <span>
                                                            امکان تحویل
                                                            <br>
                                                            اکسپرس

                                                        </span>
                                                    </a>
                                                </div>
                                                @endfor
                                            </div>
                                        </aside>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of single product component -->
        <!-- component suppliers -->
        <div class="suppliers-component-container">
            <div class="component-suppliers-body">
                <div class="row">
                    <div class="col">
                        <div class="suplliers-header">
                            <div class="suppliers-header-text">
                                لیست فروشندگان این کالا
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="suppliers-body">
                            <div class="suppliers-table mt-3">
                                <!-- one row -->
                                @for ($i = 0; $i < 5; $i++)
                                <div class="suppliers-table-row  {{ ($i < 3)?  "suppliers-always-in-list" : "suppliers-in-filter" }}  justify-content-between">
                                    <div class="suppliers-table-cell d-flex align-items-center">
                                        <i class="suppliers-seller-icon fa fa-plus-circle ml-2"></i>
                                        <div class="suplliers-seller wrapper">
                                            <p class="seller-name m-0">دیجی کالا</p>
                                            <div class="seller-rating">
                                                <span>عملکرد 5 از 5</span>
                                                <span class="u-divider"></span>
                                                <span>80% رضایت از کالا</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="suppliers-table-cell d-flex align-items-center">
                                        <div class="suppliers-sender d-flex align-items-center">
                                            <i class="suppliers-seller-icon fa fa-truck ml-2"></i>
                                            <span>ارسال دیجی کالا</span>
                                        </div>
                                    </div>
                                    <div class="suppliers-table-cell d-flex align-items-center">
                                        <div class="suplliers-guarantte">
                                            <i class="suppliers-seller-icon fa fa-check-square ml-2"></i>
                                            <span>گارانتی ۱۸ ماهه داریا همراه پایتخت</span>
                                        </div>
                                    </div>
                                    <div class="suppliers-table-cell d-flex align-items-center">
                                        <div class="suppllier-price">
                                            <span>
                                                ۳,۶۳۹,۰۰۰
                                            </span>
                                            <span> تومان</span>
                                        </div>
                                    </div>
                                    <div class="suppliers-table-cell d-flex align-items-center">
                                        <a href="" class="btn btn-outline-danger suppliers-add-to-cart-btn">افزودن به
                                            سبد</a>
                                    </div>
                                </div>
                                @endfor
                                <!-- end of a row -->
                                <div class="mt-2">
                                    <a href="" class="btn-link-blue" id="suppliers-more-btn"><span class="pl-2">نمایش فروشنده های دیگر</span> <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- related products -->
        <div class="component-related-products  container-fluid mt-5">
            <div class="component-body pb-0">
                <div class="row">
                    <div class="col py-2">
                        <div class="related-products-title pb-2">
                            <h5>محصولات مرتبط</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col swiper-container">
                        <div class="swiper-wrapper d-flex">
                            @for ($i = 0; $i < 10; $i++)
                            <div class="card border-0 card-item swiper-slide">
                                <img class="card-img-top img6" src="./style/images/19.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mytitle2">گوشی موبایل شیائومی مدل POCO X3 M2007J20CG</h5>
                                    <div class="my-font-size">
                                        <!-- <div class="myprice2 d-flex justify-content-end">
                                            <del class="text-muted pl-2">۷۰۰,۰۰۰</del>
                                            <span class="badge badge-pill badge-danger">۲۵٪</span>
                                        </div> -->
                                        <div class="font-weight-bold d-flex justify-content-end align-items-center">
                                            <span class="real-price2">۵۲۷,۰۰۰ </span>
                                            <span class="pr-1 toman-font">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
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
        <!-- component product description -->
        <div class="product-bottom-section">
            <div class="row">
                <div class="col-9">
                    <div class="product-description-container" >

                            <ul class="description-box-tabs list-unstyled nav" id="navbar-example2">
                                <li class="product-tab tab-active nav-item">
                                    <a class="nav-link" href="#expert" >نقد و بررسی</a>
                                </li>
                                <li class="product-tab nav-item">
                                    <a class="nav-link" href="#specifications" >مشخصات</a>
                                </li>
                                <li class="product-tab nav-item">
                                    <a class="nav-link" href="#comments" >دیدگاه کاربران</a>
                                </li>
                                <li class="product-tab nav-item">
                                    <a class="nav-link" href="#questions" >پرسش و پاسخ</a>
                                </li>
                            </ul>

                        <div class="product-expert-content" id="expert">
                            <article class="pt-3">
                                <div class="box-header">
                                    <span class="o-box_title">نقد و بررسی اجمالی</span>
                                    <span class="o-box_header-desc">{{ $product_title }}</span>
                                </div>
                                <section class="product-expert-content-text pb-4">
                                    <div class="expert-text mask-text">
                                        گوشی A12 یکی دیگر از میان رده‌های شرکت سامسونگ است که در تاریخ 24 نوامبر 2020
                                        معرفی شد. شرکت سامسونگ برای این محصول خود از یک صفحه‌نمایش 6.5 اینچی با رزولوشن
                                        1600 در 720 پیکسل، استفاده کرده است. این صفحه‌نمایش در هر اینچ 264 پیکسل را نشان
                                        می‌دهد که از جزئیات و وضوح تصویر خوبی برخوردار است. تراشه‌ این محصول Mediatek
                                        MT6765 Helio P35 از تراشه‌های ۱۲ نانومتری سامسونگ است که با پردازنده مرکزی هشت
                                        هسته‌ای Cortex-A55 و پردازنده گرافیکی PowerVR GE8320 همراه شده است. این تراشه
                                        برای بازکردن چندین برنامه به‌صورت هم‌زمان و تماشای ویدئو مناسب است. این گوشی با
                                        4 گیگابایت رم و 64 گیگابایت حافظه داخلی عرضه شده است و با استفاده از یک کارت
                                        حافظه‌ی جانبی قادر خواهید بود. بر روی قاب پشتی A12 یک دوربین چهارگانه قرار گرفته
                                        است. یک لنز عریض با رزولوشن 48 مگاپیکسل، یک لنز فوق عریض با رزولوشن 5 مگاپیکسل،
                                        یک لنز ماکرو با رزولوشن 2 مگاپیکسل و یک حسگر عمق 2 مگاپیکسلی مجموعه دوربین A12
                                        را تشکیل می‌دهد. برای دوربین سلفی هم یک لنز 8 مگاپیکسلی از نوع عریض انتخاب شده
                                        است که در گوشه بالای صفحه‌نمایش قرار گرفته است. منبع انرژی گوشی A12 یک باتری
                                        لیتیوم-پلیمری با ظرفیت 5000 میلی‌آمپرساعت است که از فناوری شارژ سریع 15 واتی هم
                                        پشتیبانی می‌کند.



                                    </div>
                                    <a href="" class="btn-link-blue" id="text-span-btn"><span class="pl-2">ادامه مطلب</span> <i class="fa fa-angle-down"></i></a>
                                </section>
                                <div class="content-separator">
                                </div>
                            </article>
                        </div>
                        <div class="prtoduct-specifications" id="specifications">
                            <article class="pb-3">
                                <div class="box-header pt-4">
                                    <span class="o-box_title">مشخصات کالا</span>
                                    <span class="o-box_header-desc">{{ $product_title }}</span>
                                </div>
                                {{--<section class="d-flex pt-3 pb-5">
                                    <h3 class="product-params-title">مشخصات کلی</h3>
                                    <ul class="product-param-list list-unstyled mb-0">
                                        <li class="d-flex">
                                            <div class="param-key">
                                                <span class="param-block">تراشه</span>
                                            </div>
                                            <div class="param-value">
                                                <span class="param-block">Mediatek MT6765 Helio P35 (12nm) Chipest</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="param-key">
                                                <span class="param-block">پردازنده‌ی مرکزی</span>
                                            </div>
                                            <div class="param-value">
                                                <span class="param-block">Quad-Core Cortex-A53 & Quad-core Cortex-A53 CPU</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="param-key">
                                                <span class="param-block">نوع پردازنده</span>
                                            </div>
                                            <div class="param-value">
                                                <span class="param-block">64 بیت</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="param-key">
                                                <span class="param-block">فرکانس پردازنده‌ی مرکزی</span>
                                            </div>
                                            <div class="param-value">
                                                <span class="param-block">2.35 , 1.8 گیگاهرتز</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="param-key">
                                                <span class="param-block">پردازنده‌ی گرافیکی</span>
                                            </div>
                                            <div class="param-value">
                                                <span class="param-block">PowerVR GE8320 GPU</span>
                                            </div>
                                        </li>
                                        <x-parameters :params="$product_params"></x-parameters>
                                    </ul>
                                </section>--}}

                                <x-parameters :params="$product_general_params['مشخصات کلی']" title="{{ key($product_general_params) }}"></x-parameters>
                                <div class="product-param-collapse">
                                    @foreach($product_params as $title_key => $allparams)
                                        <x-parameters :params="$allparams" :title="$title_key"></x-parameters>
                                    @endforeach
                                </div>
                                <a href="" class="btn-link-blue pb-2" id="collapse-param-btn"><span class="pl-2">نمایش همه مشخصات کالا</span> <i class="fa fa-angle-down"></i></a>
                            </article>
                        </div>
                        <div class="content-separator">
                        </div>
                        <div class="comments-container" id="comments">
                            <div class="box-header pt-4">
                                <span class="o-box_title">امتیاز و دیدگاه کاربران</span>
                                <span class="o-box_header-desc">{{ $product_title }}</span>
                            </div>
                            <div class="comments-body pt-5">
                                <div class="row">
                                    <div class="comments-sidebar col-3 pl-4">
                                        <div class="comments-side-rating-container">
                                            <div class="commnets-side-rating-number d-flex align-items-baseline">
                                                <div class="side-rating-score">۴</div>
                                                <div class="side-rating-total">از ۵</div>
                                            </div>
                                            <div class="commnets-side-rating-star d-flex align-items-center">
                                                <div class="side-stars d-flex flex-row-reverse justify-content-end">
                                                    <span class="side-star-item">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="side-star-item">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="side-star-item">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="side-star-item">
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="side-star-item empty-star">
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="side-rating-all">
                                                    از مجموع ۱۴۶۸ امتیاز
                                                </div>
                                            </div>
                                            <div class="">
                                                <!-- preogress bar items -->
                                                <ul class="content-expert-rating list-unstyled mb-0">
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">کیفیت ساخت:
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">ارزش خرید به
                                                                نسبت قیمت:
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-expert-rating-number">۴</div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">نوآوری:
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-expert-rating-number">۴</div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">امکانات و قابلیت ها
                                                                :
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-expert-rating-number">۴</div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">سهولت استفاده:
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-expert-rating-number">۴</div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="content-expert-rating-title-container d-flex justify-content-between">
                                                            <div class="content-expert-rating-title mb-2">طراحی و ظاهر:
                                                            </div>
                                                            <div class="content-expert-rating-number">۴</div>
                                                        </div>
                                                        <div
                                                            class="content-progress-bar-container justify-content-between">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-expert-rating-number">۴</div> -->
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- <!-- preogress bar end -->
                                                <!-- <ul class="progress-numbers list-unstyled d-flex flex-column mb-0">
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                    <li><div class="content-expert-rating-number">۴</div></li>
                                                </ul> -->

                                            </div>
                                            <div class="comments-add-coment-desc">دیدگاه خود را درباره این کالا بیان کنید</div>
                                            <a href="" class="my-btn-outline-red">افزودن دیدگاه</a>
                                        </div>
                                    </div>
                                    <div class="comments-section col-9">
                                        <div class="product-guarantted d-flex align-items-center">
                                            <i class="fa fa-check-square"></i>
                                            <span>بیش از ۹۴۰ نفر از خریداران این محصول را پیشنهاد داده‌اند</span>
                                        </div>
                                        <div class="comments-photos">
                                            <div class="coments-photos-container d-flex pt-4">
                                                @for ($i = 1; $i <=5 ; $i++)
                                                <div class="comment-photo-thumb">
                                                    <img src="{{ asset('./style/images/1.jpeg')}}" alt="">
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="sort-row d-flex align-items-center">
                                            <i class="fa fa-sort-amount-down"></i>
                                            <span>مرتب‌سازی دیدگاه‌ها بر اساس:</span>
                                            <ul class="list-unstyled d-flex mb-0">
                                                <li class="sort-item sort-is-active">
                                                    <a href="">
                                                        جدیدترین دیدگاه‌ها
                                                    </a>
                                                </li>
                                                <li class="sort-item">
                                                    <a href="">
                                                        مفیدترین دیدگاه‌ها
                                                    </a>
                                                </li>
                                                <li class="sort-item">
                                                    <a href="">
                                                        دیدگاه خریداران
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- comments list -->
                                        <x-comments :comments="$comments"></x-comments>

                                        <div class="comments-pagination d-flex justify-content-center">
                                            <ul class="pagination-items list-unstyled d-flex">

                                                @for ($i = 1; $i <= 10; $i++)
                                                <li class="pagination-item {{ $i==1? 'pager-item-active':'' }}">
                                                    <a href="" class="pager-item">{{ $i }}</a>
                                                </li>
                                                @endfor
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">
                                                        <i class="fa fa-angle-double-left"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-separator mt-5"></div>
                        <div class="product-question-container" id="questions">
                            <div class="box-header pt-4">
                                <span class="o-box_title">پرسش و پاسخ</span>
                                <span class="o-box_header-desc">{{ $product_title }}</span>
                            </div>
                            <div class="product-question-body pt-4">
                                <div class="row">
                                    <div class="col-3 product-question-sidebar">
                                        <!-- <div class="question-filter">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="customCheck1" type="checkbox" value="" >
                                                <label class="custom-control-label" for="customCheck1">
                                                    پرسش‌های پاسخ داده شده

                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    پرسش‌های بی‌پاسخ

                                                </label>
                                              </div>

                                        </div> -->
                                    </div>
                                    <div class="col-9 product-question-section">
                                        <div class="sort-row d-flex align-items-center">
                                            <i class="fa fa-sort-amount-down"></i>
                                            <span>مرتب‌سازی دیدگاه‌ها بر اساس:</span>
                                            <ul class="list-unstyled d-flex mb-0">
                                                <li class="sort-item sort-is-active">
                                                    <a href="">
                                                        جدیدترین پرسش ها
                                                    </a>
                                                </li>
                                                <li class="sort-item">
                                                    <a href="">
                                                        مفیدترین پرسش ها
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-question-list">
                                            <div class="question-list pt-4">
                                                <!-- question items -->
                                                <x-questions :questions="$questions"></x-questions>

                                            </div>
                                        </div>
                                        <div class="comments-pagination d-flex justify-content-center">
                                            <ul class="pagination-items list-unstyled d-flex">
                                                <li class="pagination-item pager-item-active">
                                                    <a href="" class="pager-item">1</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">2</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">3</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">4</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">5</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">6</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">7</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">8</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">9</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">10</a>
                                                </li>
                                                <li class="pagination-item">
                                                    <a href="" class="pager-item">
                                                        <i class="fa fa-angle-double-left"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="product-mini-buy-box mt-4">
                        <div class="mini-buy-product-info d-flex">
                            <img src="./style/images/25.jpg" alt="">
                            <div class="mini-product-info">
                                <div class="mini-product-title">گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم
                                    کارت ظرفیت 64 گیگابایت</div>
                                <div class="mini-buy-color d-flex align-items-center mt-2">
                                    <label for="" class="mini-color m-0"></label>
                                    <span class="mr-2">مشکی</span>
                                </div>
                            </div>
                        </div>
                        <div class="mini-buy-row align-items-center d-flex">
                            <i class="fa fa-plus-circle"></i>
                            <span class="mr-2">دیجی‌کالا</span>
                        </div>
                        <div class="mini-buy-row align-items-center d-flex">
                            <i class="fa fa-check-circle"></i>
                            <span class="mr-2">گارانتی ۱۸ ماهه دیجی کالا</span>
                        </div>
                        <div class="mini-buy-row align-items-center d-flex">
                            <i class="fa fa-check-square"></i>
                            <span class="mr-2">موجود در انبار دیجی‌کالا</span>
                        </div>
                        <div class="mini-buy-price d-flex align-items-end justify-content-end">
                            <div class="mini-price">۳,۶۷۹,۰۰۰ </div>
                            <span class="mini-box-toman mr-2">تومان</span>
                        </div>
                        <div class="mini-box-btn-row">
                            <a href="" class="btn btn-danger btn-block add-to-cart-btn">افزودن به سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    @include('includes.responsive-product')
@endsection
