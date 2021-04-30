<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/bootstrap-rtl.css">
    <link href="./style/css/all.css" rel="stylesheet">
    <link href="./style/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="./style/css/swiperjs.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/css/font.css">
    <link rel="stylesheet" href="style/css/style.css">
    @if(Route::getCurrentRoute()->uri == 'single-product')
    <link rel="stylesheet" href="./style/css/single-product.css">
    @endif
    <title>Document</title>
</head>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="250">
<!-- header and navbar 10 -->
<header class="sticky-top">
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
</header>
<!-- end header -->
