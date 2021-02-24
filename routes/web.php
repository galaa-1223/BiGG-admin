<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\AngiController;
use App\Http\Controllers\Admin\HicheelController;
use App\Http\Controllers\Admin\HuvaariController;
use App\Http\Controllers\Admin\MergejilController;
use App\Http\Controllers\Admin\MergejilBagshController;
use App\Http\Controllers\Admin\TenhimController;

use App\Http\Controllers\Auth\DepartmentAuthController;
use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Department\TeachersController as TeachersControllerDep;
use App\Http\Controllers\Department\StudentsController as StudentsControllerDep;
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

Auth::routes();

// Admin Login
Route::get('admin', [AdminAuthController::class, 'adminGet'])->name('adminLogin');
Route::get('admin/login', [AdminAuthController::class, 'adminGetLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'AdminLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'adminLogout'])->name('logout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard',[AdminController::class, 'dashboard'])->name('admindashboard');	
	
	// Teacher
	Route::get('teachers',[TeachersController::class, 'index'])->name('admin-teachers');
	Route::get('teachers/add',[TeachersController::class, 'add'])->name('admin-teachers-add');
	Route::get('teachers/edit/{id}',[TeachersController::class, 'edit'])->name('teachers-edit');
	// Route::get('teachers/delete/{id}',[TeachersController::class, 'destroy'])->name('teachers-delete');

	Route::post('teachers/add',[TeachersController::class, 'store'])->name('admin-teachers-save');
	Route::post('teachers/edit/{id}',[TeachersController::class, 'update'])->name('admin-teachers-edit');
	Route::post('teachers/delete/',[TeachersController::class, 'delete'])->name('admin-teachers-delete-ajax');

	Route::delete('teachers/delete/{id}',[TeachersController::class, 'destroy'])->name('admin-teachers-delete');

	// Angi
	Route::get('angi',[AngiController::class, 'index'])->name('admin-angi');
	Route::get('angi/add',[AngiController::class, 'add'])->name('admin-angi-add');
	Route::get('angi/edit/{id}',[AngiController::class, 'edit'])->name('angi-edit');

	Route::post('angi/add',[AngiController::class, 'store'])->name('admin-angi-save');
	Route::post('angi/edit/{id}',[AngiController::class, 'update'])->name('admin-angi-edit');

	Route::delete('angi/delete/{id}',[AngiController::class, 'destroy'])->name('admin-angi-delete');

	// Mergejil
	Route::get('mergejil',[MergejilController::class, 'index'])->name('admin-mergejil');
	Route::get('mergejil/add',[MergejilController::class, 'add'])->name('admin-mergejil-add');
	Route::get('mergejil/edit/{id}',[MergejilController::class, 'edit'])->name('mergejil-edit');

	Route::post('mergejil/add',[MergejilController::class, 'store'])->name('admin-mergejil-save');
	Route::post('mergejil/edit/{id}',[MergejilController::class, 'update'])->name('admin-mergejil-edit');
	Route::post('mergejil/delete/',[MergejilController::class, 'delete'])->name('admin-mergejil-delete-ajax');

	Route::delete('mergejil/delete/{id}',[MergejilController::class, 'destroy'])->name('admin-mergejil-delete');

	// Mergejil Bagsh
	Route::get('mergejil_bagsh',[MergejilBagshController::class, 'index'])->name('admin-mergejil_bagsh');
	Route::get('mergejil_bagsh/add',[MergejilBagshController::class, 'add'])->name('admin-mergejil_bagsh-add');
	Route::get('mergejil_bagsh/edit/{id}',[MergejilBagshController::class, 'edit'])->name('mergejil_bagsh-edit');

	Route::post('mergejil_bagsh/add',[MergejilBagshController::class, 'store'])->name('admin-mergejil_bagsh-save');
	Route::post('mergejil_bagsh/edit/{id}',[MergejilBagshController::class, 'update'])->name('admin-mergejil_bagsh-edit');

	Route::delete('mergejil_bagsh/delete/{id}',[MergejilBagshController::class, 'destroy'])->name('admin-mergejil_bagsh-delete');

	// Tenhim
	Route::get('tenhim',[TenhimController::class, 'index'])->name('admin-tenhim');
	Route::get('tenhim/add',[TenhimController::class, 'add'])->name('admin-tenhim-add');
	Route::get('tenhim/edit/{id}',[TenhimController::class, 'edit'])->name('tenhim-edit');

	Route::post('tenhim/add',[TenhimController::class, 'store'])->name('admin-tenhim-save');
	Route::post('tenhim/edit/{id}',[TenhimController::class, 'update'])->name('admin-tenhim-edit');
	Route::post('tenhim/delete/',[TenhimController::class, 'delete'])->name('admin-tenhim-delete-ajax');

	Route::delete('tenhim/delete/{id}',[TenhimController::class, 'destroy'])->name('admin-tenhim-delete');

	// Hicheel
	Route::get('hicheel',[HicheelController::class, 'index'])->name('admin-hicheel');
	Route::get('hicheel/add',[HicheelController::class, 'add'])->name('admin-hicheel-add');
	Route::get('hicheel/edit/{id}',[HicheelController::class, 'edit'])->name('hicheel-edit');

	Route::post('hicheel/add',[HicheelController::class, 'store'])->name('admin-hicheel-save');
	Route::post('hicheel/edit/{id}',[HicheelController::class, 'update'])->name('admin-hicheel-edit');
	Route::post('hicheel/delete/',[HicheelController::class, 'delete'])->name('admin-hicheel-delete-ajax');

	Route::delete('hicheel/delete/{id}',[HicheelController::class, 'destroy'])->name('admin-hicheel-delete');

	// Huvaari
	Route::get('huvaari',[HuvaariController::class, 'index'])->name('admin-huvaari');

	// Students
	Route::get('students',[StudentsController::class, 'index'])->name('admin-students');
	Route::get('students/add',[StudentsController::class, 'add'])->name('admin-students-add');
});

// Department Login
Route::get('department', [DepartmentAuthController::class, 'departmentGet'])->name('departmentLogin');
Route::get('department/login', [DepartmentAuthController::class, 'departmentGetLogin'])->name('departmentLogin');
Route::post('department/login', [DepartmentAuthController::class, 'DepartmentLogin'])->name('departmentLoginPost');
Route::get('department/logout', [DepartmentAuthController::class, 'departmentLogout'])->name('logout');

Route::group(['prefix' => 'department','middleware' => 'departmentauth'], function () {
	// Department Dashboard
	Route::get('dashboard',[DepartmentController::class, 'dashboard'])->name('departmentdashboard');	

	// Teacher
	Route::get('teachers',[TeachersControllerDep::class, 'index'])->name('teachers');
	Route::get('teachers/add',[TeachersControllerDep::class, 'add'])->name('teachers-add');
	Route::get('teachers/edit/{id}',[TeachersControllerDep::class, 'edit'])->name('teachers-edit');
	// Route::get('teachers/delete/{id}',[TeachersControllerDep::class, 'destroy'])->name('teachers-delete');

	Route::post('teachers/add',[TeachersControllerDep::class, 'store'])->name('teachers-save');
	Route::post('teachers/edit/{id}',[TeachersControllerDep::class, 'update'])->name('teachers-edit');

	Route::delete('teachers/delete/{id}',[TeachersControllerDep::class, 'destroy'])->name('teachers-delete');

	// Students
	Route::get('students',[StudentsControllerDep::class, 'index'])->name('students');
	Route::get('students/add',[StudentsControllerDep::class, 'add'])->name('students-add');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
