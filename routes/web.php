<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\AdminContactController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about');
Route::get('/iletisim', [ContactMessageController::class, 'index'])->name('contact');

Route::post('/iletişim',[ContactMessageController::class,'send'])->name('contact.send');

Route::get('/admin/login',[AdminAuthController::class,'showLoginForm'])->name('admin.login');

Route::post('/admin/login',[AdminAuthController::class,'login'])->name('admin.login.post');

Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminAuthMiddleware::class])->group(function(){
    Route::get('admin/dashboard/',[AdminDashboardController::class,'index'])->name('admin.dashboard');
});

Route::get('/admin/contact',[AdminContactController::class,'index'])->name('admin.contact');
Route::resource('/admin/about-content', AboutContentController::class);

Route::resource('/admin/projects', ProjectController::class);

Route::resource('/admin/team-members', TeamMemberController::class);

Route::get('/admin/about-page', [AboutPageController::class, 'index'])->name('admin.about-page.index');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('iletisimbilgileri', ContactController::class);
});