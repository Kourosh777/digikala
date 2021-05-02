<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function product()
    {
        $product_general_params=[
            'مشخصات کلی' => ['ابعاد' => '164x75.8x8.9 ',
                'توضیحات سیم کارت' => 'سایز نانو (8.8 × 12.3 میلی‌متر)',
                'وزن' => '205 گرم',
                'ساختار بدنه' => 'قاب پشتی و فریم از پلاستیک',
                'ویژگی‌های خاص' => 'مجهز به حس‌گر اثرانگشت , فبلت , مناسب
                                                    عکاسی',
                'تراشه' => 'Mediatek MT6765 Helio P35 (12nm) Chipest']
        ];

        $product_params = [
            'پردازنده'=>['پردازنده‌ی مرکزی' => 'Quad-Core Cortex-A53 & Quad-core Cortex-A53 CPU',
                'نوع پردازنده' => '64 بیت',
                'فرکانس پردازنده‌ی مرکزی' => '2.35 , 1.8 گیگاهرتز',
                'پردازنده‌ی گرافیکی' => 'PowerVR GE8320 GPU',
            ],
            'حافظه'=>['حافظه داخلی' => '64 گیگابایت',
                'مقدار RAM' => '4 گیگابایت',
                'پشتیبانی از کارت حافظه جانبی' => 'microSD',
                'استاندارد کارت حافظه' => 'eMMC 5.1',
            ]
        ];
        $comments = [
            [
                'title' => 'خوب',
                'date' => '۶ اردیبهشت ۱۴۰۰',
                'username' => 'کاربر دیجی‌کالا',
                'content' => 'نسبت به قیمتش خیلی خوبه',
            ],
            [
                'title' => 'خوب',
                'date' => '۶ اردیبهشت ۱۴۰۰',
                'username' => 'کاربر دیجی‌کالا',
                'content' => 'نسبت به قیمتش خیلی خوبه',
            ],
            [
                'title' => 'خوب',
                'date' => '۶ اردیبهشت ۱۴۰۰',
                'username' => 'کاربر دیجی‌کالا',
                'content' => 'نسبت به قیمتش خیلی خوبه',
            ],
            [
                'title' => 'خوب',
                'date' => '۶ اردیبهشت ۱۴۰۰',
                'username' => 'کاربر دیجی‌کالا',
                'content' => 'نسبت به قیمتش خیلی خوبه',
            ],

        ];

        $questions = [
            [
                'question' => 'ایا این گوشی اثر انگشت دارد',
                'answer' => 'بله دارد',
                'answer_username' => 'علی محمدی',
            ],
            [
                'question' => 'ایا این گوشی اثر انگشت دارد',
                'answer' => 'بله دارد',
                'answer_username' => 'علی محمدی',
            ],
            [
                'question' => 'ایا این گوشی اثر انگشت دارد',
                'answer' => 'بله دارد',
                'answer_username' => 'علی محمدی',
            ],
            [
                'question' => 'ایا این گوشی اثر انگشت دارد',
                'answer' => 'بله دارد',
                'answer_username' => 'علی محمدی',
            ],
        ];

        return view('single-product', compact('product_params', 'comments', 'questions','product_general_params'));
    }
}
