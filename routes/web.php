<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\Climate;

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
    return view('home',[
         "title" => "home"
     ]);
 });

Route::get('/home', function () {
   return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Luis Fernando"
    ]);
});

Route::get('/panjang', function () {
    return view('panjang',[
        "title" => "panjang",
        "name" => "Terbaru"
    ]);
});

Route::get('/petengoran', function () {
    return view('petengoran',[
        "title" => "petengoran",

        
    ]);
});
Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "contact",

        
    ]);
});

Route::get('/cart', [ChartController::class, 'cart'])->name('cart');
   







