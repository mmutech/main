<?php
//use Auth;
use Illuminate\Support\Facades\Route;

// ADMIN
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
use App\Http\Livewire\Admin\LocationComponent;
use App\Http\Livewire\Admin\ExitTypeComponent;
use App\Http\Livewire\Admin\ExitInitComponent;
use App\Http\Livewire\Admin\ExitViewComponent;
use App\Http\Livewire\Admin\ExitInterviewComponent;
use App\Http\Livewire\Admin\Deployment;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\ManageLeave;
use App\Http\Livewire\Admin\LeaveSettings;

// USERS
use App\Http\Livewire\User\Myprofile;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\User\Leave;


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

Route::redirect('/', 'login');
Route::get('/home', function () {
    if(Auth::check()) {
        if(Auth::user()->is_admin == 1){
            return redirect('admin/dashboard');
        } else {
            return redirect('user/dashboard');
        }
    }
});

//Route::middleware(['auth'])->group(function () {
//    Route::get('/myprofile', Myprofile::class);
//    Route::get('/user-dashboard', UserDashboard::class);
//});
Route::group(['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function() {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.',
    ], function () {
        //Route::get('dashboard', function () {return view('livewire.admin.dashboard');} )->name('dashboard');
        Route::get('/dashboard', Dashboard::class);
        Route::get('/all-employees', Employees::class);
        Route::get('/employee-profile/{id}', EmployeeProfile::class);
        Route::get('/create-employee', FormWizard::class);
        Route::get('/employee-activate/{id}', EmployeeActivate::class)->name('employee-activate');

        // Preferences Routes.
        Route::get('/division', Division::class);
        Route::get('/department-component', DepartmentComponent::class);
        Route::get('/unit-component', UnitComponent::class);
        Route::get('/job-role-component', JobRoleComponent::class);
        Route::get('/designation-component', DesignationComponent::class);
        Route::get('/grade-level-component', GradeLevelComponent::class);
        Route::get('/location-component', LocationComponent::class);

        // Exit Procedures Routes.
        Route::get('/exit-type-component', ExitTypeComponent::class);
        Route::get('/exit-init-component', ExitInitComponent::class);
        Route::get('/exit-interview-component', ExitInterviewComponent::class);
        Route::get('/exit-view-component/{id}', ExitViewComponent::class)->name('exit-view-component');

        // Leave Procedures Routes
        Route::get('/manage-leave', ManageLeave::class);
        Route::get('/leave-settings', LeaveSettings::class);

    });

    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function() {
       Route::get('/dashboard', UserDashboard::class);
       Route::get('/myprofile', Myprofile::class);
       Route::get('/leave', Leave::class);
       
    });

});

//Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
//    ->group(function () {
//        Route::get('/dashboard', function () {return view('admin-home');})->name('dashboard');
//        Route::get('/all-employees', [Employees::class]);
//        Route::get('/employee-profile/{id}', [EmployeeProfile::class]);
//        Route::get('/create-employee', [FormWizard::class]);
//        Route::get('/employee-activate/{id}', [EmployeeActivate::class])->name('employee-activate');
//
//
//        //Test Route (To be removed)
//
//        // Preferences Routes.
//        Route::get('/division', [Division::class]);
//        Route::get('/department-component', [DepartmentComponent::class]);
//        Route::get('/unit-component', [UnitComponent::class]);
//        Route::get('/job-role-component', [JobRoleComponent::class]);
//        Route::get('/designation-component', [DesignationComponent::class]);
//        Route::get('/grade-level-component', [GradeLevelComponent::class]);
//        Route::get('/location-component', [LocationComponent::class]);
//
//        // Exit Procedures Routes.
//        Route::get('/exit-type-component', [ExitTypeComponent::class]);
//        Route::get('/exit-init-component', [ExitInitComponent::class]);
//        Route::get('/exit-interview-component', [ExitInterviewComponent::class]);
//        Route::get('/exit-view-component/{id}', [ExitViewComponent::class])->name('exit-view-component');
//});

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');