<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Employees;
use App\Http\Livewire\Admin\EmployeeProfile;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {return view('admin-home');})->name('dashboard');
        Route::get('/all-employees', Employees::class);
        Route::get('/create-employee-profile', EmployeeProfile::class);

});
