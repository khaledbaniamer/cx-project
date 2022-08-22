<?php

use App\Http\Controllers\CXController;
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
    return view('welcome');
});

Route::view('/text-feed' , 'text-feedback');
Route::post('text-feed' , [CXController::class , 'input_file']);

















































































// front end mohamad start


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});



Route::get('/form', function () {
    return view('companyForm');
});

Route::get('/add-service', function () {
    return view('add-service');
});





// front end mohamad end





