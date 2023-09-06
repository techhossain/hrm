<?php

use App\Models\User;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;

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
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route for Employee list
    Route::get('/employees', [EmployeeController::class, 'index'])->name('admin.employees');
    // Route for Users list

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    // Route for create Users
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('admin.user.store');
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

    // $countries = json_decode(file_get_contents(public_path() . "/data/countries.json"), true);

    // $common = [];

    // foreach ($countries as $contry) {
    //     // dd($contry);
    //     array_push($common, $contry['name']['common']);
    // }

    // dd($countries[0]['languages']);

    // echo $countries[0]['name']['common'];

    // $countries_file = file_get_contents(public_path() . '/data/countries2.json');
    // $countries_array = json_decode($countries_file, true);


    // foreach ($countries_array as $single_country) {
    //     $country = new Country;
    //     $country->name = $single_country['name'];
    //     $country->code = $single_country['code'];
    //     $country->flag_image = $single_country['code'] . '.png';

    //     $country->save();
    // }

    // $language_file = file_get_contents(public_path() . '/data/language.json');
    // $language_array = json_decode($language_file, true);

    // dd($language_array);

    $users = User::find(1);

    dd($users->employee->designation);
});
