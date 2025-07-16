<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class AdminDashboardController extends Controller
{
   
    public function index()
    {
         $latestMessages = ContactMessage::latest()->take(3)->get();

    return view('admin.dashboard', compact('latestMessages'));
       
    }
}
