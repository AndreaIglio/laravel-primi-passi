<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('about_us', function () {
    $name = 'Andrea';
    return view('about', compact('name'));
});
Route::get('story', function () {
    $countries = [
        [
            "name" => 'Indonesia',
        ],
        [
            "name" => 'Marocco',
        ],
        [
            "name" => 'Australia',
        ],
        ];
    return view('story', compact('countries'));
});
Route::get('contact_us', function () {
    return view('contact');
});
Route::get('home', function () {
    return view('home');
});