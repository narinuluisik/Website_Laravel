<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutContent;

class AboutContentController extends Controller
{
    public function index()
    {
        $aboutContents = AboutContent::all(); 
        return view('admin.about-content.index', compact('aboutContent')); 
    }

    public function edit($id)
    {
        $aboutContent = AboutContent::findOrFail($id);
        return view('admin.about-content.edit', compact('aboutContent'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'vision' => 'nullable',
            'mission' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $about = AboutContent::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/about'), $fileName);
            $data['image'] = 'uploads/about/' . $fileName;
        }

        $about->update($data);
       return redirect()->route('admin.about-page.index')->with('success', 'İçerik güncellendi.');

    }

    public function destroy($id)
    {
        AboutContent::destroy($id);
        return redirect()->route('admin.about-page.index')->with('success', 'İçerik silindi.');
    }
}
