<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        // Hakkımızda içeriği (ilk satır veya 'hakkimizda' olanı)
        $about = AboutContent::where('name', 'hakkimizda')->first();

        // Ekip üyeleri, order’a göre sırala
        $team = TeamMember::orderBy('order')->get();

    return view('site.about', compact('about', 'team'));
    }
}
