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
    $comics_array = config('db.comics_array');
    $main_navbar = config('db.main_navbar');
    $dc_comics = config('db.dc_comics');
    $shop_section = config('db.shop_section');
    $dc_section = config('db.dc_section');
    $sites_section = config('db.sites_section');
    $social_media = config('db.social_media');
    return view('home', compact('comics_array', 'main_navbar', 'dc_comics', 
    'shop_section', 'dc_section', 'sites_section', 'social_media'));
});