<?php

use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    Session::forget('user');
    return redirect('login');
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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/productspage', function () {
    return view('productspage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/productsdept', function () {
    return view('productsdept');
});
Route::get('/productselect', function () {
    return view('productselect');
});

Route::post('/registrationpage', function(){
    $user = new User();
    $user->Firstname = request('Fname');
    $user->Lastname = request('Lname');
    $user->EmailAddress = request('EmailAddress');
    $user->Password = bcrypt(request('Password'));
    $user->save();
    return redirect('/login');
});

Route::post("/login",[UserController::class,'login']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::post('add_to_wish', [ProductController::class, 'addToWish']);
Route::post("orderplaced", [ProductController::class, 'paymentDone']);


Route::get('cartmenu', [ProductController::class, 'cartMenu']);
Route::get('wishlist', [ProductController::class, 'wishListMenu']);
Route::get('remove/{id}', [ProductController::class, 'cartRemove']);
Route::get('removeList/{id}', [ProductController::class, 'wishRemove']);
Route::get("order", [ProductController::class, 'orderPlaced']);
Route::get("myorders", [ProductController::class, 'orderList']);
