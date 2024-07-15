<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $experiences = Experience::all();
        $skills = Skill::all();

        return view('pages.resume', compact('experiences', 'skills'));
    }
}
