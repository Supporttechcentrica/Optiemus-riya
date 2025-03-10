<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
// Frontend routes
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/agriculture', function () {
    return view('agriculture');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/vajra-qc-20', function () {
    return view('vajra-qc-20');
});
Route::get('/vajra-qc-65', function () {
    return view('vajra-qc-65');
});
Route::get('/vajra-qc-100', function () {
    return view('vajra-qc-100');
});
Route::get('/marak-pl-70', function () {
    return view('marak-pl-70');
});
Route::get('/darsh', function () {
    return view('darsh');
});
Route::get('/ajeya-vt-80', function () {
    return view('ajeya-vt-80');
});
Route::get('/agri-shakti-10-l', function () {
    return view('agri-shakti-10-l');
});
Route::get('/agri-shakti-16-l', function () {
    return view('agri-shakti-16-l');
});
Route::get('/vajra-qc-p20', function () {
    return view('vajra-qc-p20');
});
Route::get('/application', function () {
    return view('application');
});
Route::get('/disaster-management', function () {
    return view('disaster-management');
});
Route::get('/logistic', function () {
    return view('logistic');
});
Route::get('/mapping-survey', function () {
    return view('mapping-survey');
});
Route::get('/asset-management', function () {
    return view('asset-management');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/defence-drone', function () {
    return view('defence-drone');
});
Route::get('/agriculture-drone', function () {
    return view('agriculture-drone');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login']);
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
// Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin.about');
    Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');
});