<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Factory|View|Application
    {
        $resumes = [
            'education' => [
                'هنرستان جلیل نصیر زاده' => [
                    'startDate' => '1398',
                    'endDate' => '1401',
                    'description' => 'رشته طراحی و توسعه پایگاه های اینترنتی'
                ],
                'دانشکده فنی حرفه ای منتظری' => [
                    'startDate' => '1401',
                    'endDate' => 'تاکنون',
                    'description' => 'رشته کامپیوتر گرایش نرم افزار'
                ]
            ],
            'experiences' => [
                'ویکی پلاس' => [
                    'startDate' => '1401',
                    'endDate' => 'تاکنون',
                    'description' => 'برنامه نویس بک اند | وردپرس'
                ],
                'گروه نرم افزار آیلرو' => [
                    'startDate' => '1402',
                    'endDate' => 'تاکنون',
                    'description' => 'برنامه نویس بک اند | لاراول'
                ],
                'سبزلرن' => [
                    'startDate' => '1402',
                    'endDate' => 'تاکنون',
                    'description' => 'برنامه نویس بک اند | وردپرس'
                ],
                'گروه نرم افزار پارت' => [
                    'startDate' => '1402',
                    'endDate' => 'تاکنون',
                    'description' => 'برنامه نویس بک اند | نود جی اس'
                ]
            ],
            'hardSkills' => [
                'php' => [
                    'percentageOfExpertise' => '90',
                ],
                'laravel' => [
                    'percentageOfExpertise' => '75',
                ],
                'wordpress' => [
                    'percentageOfExpertise' => '85',
                ],
                'javascript' => [
                    'percentageOfExpertise' => '70',
                ],
                'nodejs' => [
                    'percentageOfExpertise' => '60',
                ],
                'sql' => [
                    'percentageOfExpertise' => '70',
                ],
            ],
            'softSkills' => [
                'کارگروهی' => [
                    'percentageOfExpertise' => '90',
                ],
                'حل مسئله' => [
                    'percentageOfExpertise' => '75',
                ],
                'مدیریت استرس' => [
                    'percentageOfExpertise' => '85',
                ],
                'ارتباط و تعامل' => [
                    'percentageOfExpertise' => '60',
                ],
                'مدیریت زمان' => [
                    'percentageOfExpertise' => '90',
                ],
                'تطبیق پذیری' => [
                    'percentageOfExpertise' => '70',
                ],
            ]
        ];

        return view('pages.resume', compact('resumes'));
    }
}
