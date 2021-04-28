<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/digikala', function () {
    return view('index');
});
Route::get('/single-product', function () {
    $product_params=[
        'ابعاد'=>'164x75.8x8.9 ',
        'توضیحات سیم کارت'=>'سایز نانو (8.8 × 12.3 میلی‌متر)',
        'وزن'=>'205 گرم',
        'ساختار بدنه'=>'قاب پشتی و فریم از پلاستیک',
        'ویژگی‌های خاص'=>'مجهز به حس‌گر اثرانگشت , فبلت , مناسب
                                                    عکاسی',
        'تعداد سیم کارت'=>'دو سیم کارت'
    ];
    $comments=[
        [
        'title'=>'خوب',
        'date'=>'۶ اردیبهشت ۱۴۰۰',
        'username'=>'کاربر دیجی‌کالا',
        'content'=>'نسبت به قیمتش خیلی خوبه',
    ],
        [
            'title'=>'خوب',
            'date'=>'۶ اردیبهشت ۱۴۰۰',
            'username'=>'کاربر دیجی‌کالا',
            'content'=>'نسبت به قیمتش خیلی خوبه',
        ],
        [
            'title'=>'خوب',
            'date'=>'۶ اردیبهشت ۱۴۰۰',
            'username'=>'کاربر دیجی‌کالا',
            'content'=>'نسبت به قیمتش خیلی خوبه',
        ],
        [
            'title'=>'خوب',
            'date'=>'۶ اردیبهشت ۱۴۰۰',
            'username'=>'کاربر دیجی‌کالا',
            'content'=>'نسبت به قیمتش خیلی خوبه',
        ],

    ];

    $questions=[
    [
        'question' =>'ایا این گوشی اثر انگشت دارد',
        'answer' =>'بله دارد',
        'answer_username' =>'علی محمدی',
        ],
        [
            'question' =>'ایا این گوشی اثر انگشت دارد',
            'answer' =>'بله دارد',
            'answer_username' =>'علی محمدی',
        ],
        [
            'question' =>'ایا این گوشی اثر انگشت دارد',
            'answer' =>'بله دارد',
            'answer_username' =>'علی محمدی',
        ],
        [
            'question' =>'ایا این گوشی اثر انگشت دارد',
            'answer' =>'بله دارد',
            'answer_username' =>'علی محمدی',
        ],
    ];

//    dd( Route::getCurrentRoute()->uri == 'single-product' );
//    dd(compact('comments'));

    return view('single-product',compact('product_params','comments','questions'));
});
