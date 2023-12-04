<?php

use App\Models\User;
use App\Livewire\MYForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');

});

Route::get('/xrdata', function () {
    return view('xrdata');

});

Route::get('/test', function () {
    return view('test');

});

Route::get('/getxr',[ MYForm::class,'show'])->name('getxr');
Route::post('/getxr',[ MYForm::class,'store']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
