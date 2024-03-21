<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $information = [
            'aboutMe' => 'سلام رفقا! من علیرضا وحدانی هستم، یه آدم عاشق حل مسئله که عاشق دنیای برنامه‌نویسی هم هستم. مدتیه که توی این دنیا غرق شدم و از حل مشکلات ریز و درشتش کلی کیف می‌کنم.وب‌سایت من یه جوریه که می‌تونید با خودم و کارهام آشنا بشید. توی این وب‌سایت، نمونه‌هایی از پروژه‌ها، مقالات و تجربه‌هام توی دنیای وب رو می‌تونید ببینید. من عاشق یادگیری و پیشرفت هستم و همیشه دنبال همکاری با آدم‌های خلاق و نوآور هستم. اگه دنبال یه برنامه‌نویس خلاق و حلال مشکلات هستید، من اینجام!',
            'whatIDo' => [
                'توسعه وب' => [
                    'icon' => 'assets/icons/icon-dev.svg',
                    'description' => 'مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای.',
                ],
                'توسعه اپلیکشن اندروید' => [
                    'icon' => 'assets/icons/icon-app.svg',
                    'description' => 'مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای.',
                ],
                'طراحی وب' => [
                    'icon' => 'assets/icons/icon-design.svg',
                    'description' => 'مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای.',
                ],
                'عکاسی' => [
                    'icon' => 'assets/icons/icon-photo.svg',
                    'description' => 'مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای.',
                ]
            ],
            'feedbacks' => [
                [
                    'profile' => 'assets/img/avatar-2.jpg',
                    'name' => 'نیاز به بروز رسانی',
                    'description' => 'نیاز به بروز رسانی'
                ],
                [
                    'profile' => 'assets/img/avatar-1.jpg',
                    'name' => 'نیاز به بروز رسانی',
                    'description' => 'نیاز به بروز رسانی'
                ],
                [
                    'profile' => 'assets/img/avatar-3.jpg',
                    'name' => 'نیاز به بروز رسانی',
                    'description' => 'نیاز به بروز رسانی'
                ],
                [
                    'profile' => 'assets/img/avatar-4.jpg',
                    'name' => 'نیاز به بروز رسانی',
                    'description' => 'نیاز به بروز رسانی'
                ],
            ],
            'customers' => [
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
                [
                    'name' => 'temp',
                    'link' => '#',
                    'logo' => 'assets/img/logo-partner.svg'
                ],
            ]
        ];

        return view('home', compact('information'));
    }
}
