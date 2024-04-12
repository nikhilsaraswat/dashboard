<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usermanagement', function () {
    return view('usermanagement');
});
Route::get('/roleandpermissionmanagement', function () {
    return view('roleandpermissionmanagement');
});
Route::get('/invoicemanagement', function () {
    return view('invoicemanagement');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
