<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Feedback;
use App\Models\SiteSetting;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Factory|View|Application
    {
        $settings = SiteSetting::first();
        $feedbacks = Feedback::where('status', 'approved')->get();
        $customers = Customer::all();

        return view('home', compact('settings', 'feedbacks', 'customers'));
    }
}
