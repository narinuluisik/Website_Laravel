<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Middleware\AdminAuthMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about');
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');

Route::post('/iletişim',[ContactController::class,'send'])->name('contact.send');

Route::get('/admin/login',[AdminAuthController::class,'showLoginForm'])->name('admin.login');

Route::post('/admin/login',[AdminAuthController::class,'login'])->name('admin.login.post');

Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminAuthMiddleware::class])->group(function(){
    Route::get('admin/dashboard/',[AdminDashboardController::class,'index'])->name('admin.dashboard');
});