<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('admin.about-page.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team.create');
    }
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'position' => 'required',
        'bio' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg'
    ]);


        $data = $request->all();

    if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/team'), $fileName);
            $data['image'] = 'uploads/team/' . $fileName;
    }

    TeamMember::create($data);
    return redirect()->route('admin.about-page.index')->with('success', 'Ekip üyesi eklendi.');
}


    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.team.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'bio' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'

        ]);

        $teamMember = TeamMember::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/team'), $fileName);
            $data['image'] = 'uploads/team/' . $fileName;
        }

        $teamMember->update($data);

          return redirect()->route('admin.about-page.index')->with('success', 'Ekip üyesi eklendi.');
    }

    public function destroy($id)
    {
        TeamMember::destroy($id);
        return redirect()->route('admin.about-page.index')->with('success', 'Ekip üyesi silindi.');
    }
}

