<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.iletisimbilgileri.index', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.iletisimbilgileri.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'adress' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
            'time' => 'nullable'
        ]);
        $contact = Contact::findOrFail($id);
        $data = $request->all();
        $contact->update($data);

        return redirect()->route('admin.iletisimbilgileri.index')->with('success', 'İletişim bilgileri güncellendi.');
    }
}
