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
    return view('home', 
        [
            "url" => 'https://images.unsplash.com/photo-1535551951406-a19828b0a76b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1346&q=80'
        ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts',
    [
        "name" => 'Pinco',
        "surname" => 'Pallino',
        "address" => 'Via senza nome, 25',
        "mail" => 'Pinco@Palla.it',
    ]);
});