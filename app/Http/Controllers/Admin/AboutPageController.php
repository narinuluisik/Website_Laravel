<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutContent;
use App\Models\Project;
use App\Models\TeamMember;

class AboutPageController extends Controller
{
    public function index()
    {
        $aboutContents = AboutContent::all();
        $projects = Project::all();
        $teamMembers = TeamMember::all();

        return view('admin.about-page.index', compact('aboutContents', 'projects', 'teamMembers'));
    }
}
