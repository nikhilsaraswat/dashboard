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

Route::get('/usermanagement/{id}/edit', [userRegistrationPostController::class, 'edit']);
// Route::get('/items/{id}/edit', 'ItemController@edit');
Route::put('/edit/{id}', [userRegistrationPostController::class, 'update']);
// Route::put('/usermanagement/{id}', 'ItemController@update');

Route::get('/usermanagement/delete/{id}', [userRegistrationPostController::class, 'delete']);
