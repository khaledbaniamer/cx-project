<?php


use App\Http\Controllers\CXController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\KeywordController;

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






// Route::get('/company', function () {
//     return view('company');
// });

Route::get('/company', [CompanyController::class,'create']);

Route::post('/addcompany', [CompanyController::class,'store']);


Route::get('/keywords', [KeywordController::class,'create']);

Route::post('/addkeyword', [KeywordController::class,'store']);









































































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





