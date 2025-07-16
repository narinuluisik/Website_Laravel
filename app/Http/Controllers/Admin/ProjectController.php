<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('admin.about-page.index',compact('projects'));
    }

     public function create()
    {
        return view('admin.project.create');
    }

     public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/projects'), $fileName);
            $data['image'] = 'uploads/projects/' . $fileName;
        }

        Project::create($data);

           return redirect()->route('admin.about-page.index')->with('success', 'proje eklendi.');
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $project = Project::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/projects'), $fileName);
            $data['image'] = 'uploads/projects/' . $fileName;
        }

        $project->update($data);

        return redirect()->route('admin.about-page.index')->with('success', 'proje güncellendi.');
    }

    public function destroy($id)
    {
        Project::destroy($id);
       return redirect()->route('admin.about-page.index')->with('success', 'proje silindi.');
    }
}

