<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userRegistrationPostController;

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

Route::get('usermanagement', [userRegistrationPostController::class, 'index']);
Route::post('user-registration-store-form', [userRegistrationPostController::class, 'store']);


