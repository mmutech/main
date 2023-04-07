<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Employees;
use App\Http\Livewire\Admin\EmployeeProfile;
use App\Http\Livewire\Admin\FormWizard;
use App\Http\Livewire\Admin\EmployeeActivate;

use App\Http\Livewire\Admin\Division;
use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\UnitComponent;
use App\Http\Livewire\Admin\JobRoleComponent;
use App\Http\Livewire\Admin\DesignationComponent;
use App\Http\Livewire\Admin\GradeLevelComponent;
use App\Http\Livewire\Admin\ExitTypeComponent;
use App\Http\Livewire\Admin\ExitInitComponent;
use App\Http\Livewire\Admin\ExitViewComponent;
use App\Http\Livewire\Admin\ExitInterviewComponent;


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
        Route::get('/employee-profile', EmployeeProfile::class);
        Route::get('/create-employee', FormWizard::class);
        Route::get('/employee-activate/{id}', EmployeeActivate::class)->name('employee-activate');

        // Preferences Routes.
        Route::get('/division', Division::class);
        Route::get('/department-component', DepartmentComponent::class);
        Route::get('/unit-component', UnitComponent::class);
        Route::get('/job-role-component', JobRoleComponent::class);
        Route::get('/designation-component', DesignationComponent::class);
        Route::get('/grade-level-component', GradeLevelComponent::class);

        // Exit Procedures Routes.
        Route::get('/exit-type-component', ExitTypeComponent::class);
        Route::get('/exit-init-component', ExitInitComponent::class);
        Route::get('/exit-interview-component', ExitInterviewComponent::class);
        Route::get('/exit-view-component/{id}', ExitViewComponent::class)->name('exit-view-component');

});
