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
})->name('home');


/*
|--------------------------------------------------------------------------
| Admin Dashboard --> Registered user
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage_all']], function () {

    // Route for Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Route for Employee list
    Route::get('/employees', [AdminController::class, 'employee_index'])->name('admin.employees');

    // Route for Users list
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');

    // Route for create Users
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('admin.user.store');

    // Route for update user
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');

    // Route for user profile
    Route::get('/user/profile', [UserController::class, 'show_user_profile'])->name('admin.user.profile');
    Route::post('/user/profile', [UserController::class, 'update_user_profile'])->name('admin.user.profile.update');


    // Route for Delete user
    Route::post('/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

});

    // Logout
    Route::post('/logout', [UserController::class, 'user_logout'])->name('user.logout');


/*
|--------------------------------------------------------------------------
| Employee - Panel
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'employee', 'middleware' => ['auth']], function () {

    // Route for Employee list
    Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
    // Route for Employee Attandence
    Route::get('/attendance', [EmployeeController::class, 'attendance'])->name('employee.attendance');
    // Route for Employee Leaves
    Route::get('/leaves', [EmployeeController::class, 'leaves'])->name('employee.leaves');
    // Route for Employee Holiday
    Route::get('/holiday', [EmployeeController::class, 'holiday'])->name('employee.holiday');


    // Route for Employee Profile
    Route::get('/profile', [EmployeeController::class, 'show_employee_profile'])->name('employee.profile.show');
    Route::post('/profile', [EmployeeController::class, 'update_employee_profile'])->name('employee.profile.update');

});



/*
|--------------------------------------------------------------------------
| Authentication - Login and Register
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'user_login'])->name('user.login');
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
