<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/detail', function () {
    return view('detail', [
        "title" => "Detail"
    ]);
});

// routes/web.php

Route::get('/dashboard', function () {
    return view('admin.dashboard.home', [
        "title"=> "Dashboard"
    ]);
});


Route::get('/login', function () {
    return view('admin.auth.login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('admin.auth.register', [
        "title" => "Register"
    ]);
});