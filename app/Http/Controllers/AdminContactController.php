<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;


class AdminContactController extends Controller
{
   
    public function index()
    {
         $messages = ContactMessage::all();
     
        return view('admin.contact', compact('messages'));
   
    }
}
