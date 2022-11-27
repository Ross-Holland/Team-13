<?php

use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/registrationpage', function () {
    return view('registrationpage');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/productspage', function () {
    return view('productspage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::post('/registrationpage', function(){
    $user = new User();
    $user->Firstname = request('Fname');
    $user->Lastname = request('Lname');
    $user->EmailAddress = request('EmailAddress');
    $user->Password = request('Password');
    $user->save();
    return redirect('/welcome');
});

Route::post("/login",[UserController::class,'login']);
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
