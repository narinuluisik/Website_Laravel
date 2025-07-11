<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\TeamMember;
use App\Models\Project;

class AboutController extends Controller
{
    public function index()
    {
        // Hakkımızda içeriği (ilk satır veya 'hakkimizda' olanı)
        $about = AboutContent::where('name', 'hakkimizda')->first();

        // Ekip üyeleri, order’a göre sırala
        $team = TeamMember::orderBy('order')->get();

        $projects = Project::latest()->take(3)->get();

    return view('site.about', compact('about', 'team','projects'));
    }
}
