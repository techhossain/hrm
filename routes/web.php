<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
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


/*
|--------------------------------------------------------------------------
| Admin Dashboard --> Registered user
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {

    // Route for Dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);
    // Route for Employee list
    Route::get('/employees', [EmployeeController::class, 'index']);
});

/*
|--------------------------------------------------------------------------
| Authentication - Login and Register
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [AuthController::class, 'login']);
});


Route::get('load-data', function () {

    $countries = json_decode(file_get_contents(public_path() . "/countries.json"), true);

    $common = [];

    foreach ($countries as $contry) {
        // dd($contry);
        array_push($common, $contry['name']['common']);
    }

    dd(count($common));

    // echo $countries[0]['name']['common'];
});
