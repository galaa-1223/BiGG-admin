<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\StudentsController;

use App\Http\Controllers\Auth\DepartmentAuthController;
use App\Http\Controllers\Department\DepartmentController;
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

Route::get('admin', [AdminAuthController::class, 'adminGet'])->name('adminLogin');
Route::get('admin/login', [AdminAuthController::class, 'adminGetLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'AdminLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'adminLogout'])->name('logout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard',[AdminController::class, 'dashboard'])->name('admindashboard');	
	
	Route::get('teachers',[TeachersController::class, 'index'])->name('teachers');
	Route::get('teachers/add',[TeachersController::class, 'add'])->name('teachers-add');
	Route::post('teachers/add',[TeachersController::class, 'store'])->name('teachers-save');

	Route::get('students',[StudentsController::class, 'index'])->name('students');
	Route::get('students/add',[StudentsController::class, 'add'])->name('students-add');
});

Route::get('department', [DepartmentAuthController::class, 'departmentGet'])->name('departmentLogin');
Route::get('department/login', [DepartmentAuthController::class, 'departmentGetLogin'])->name('departmentLogin');
Route::post('department/login', [DepartmentAuthController::class, 'DepartmentLogin'])->name('departmentLoginPost');
Route::get('department/logout', [DepartmentAuthController::class, 'departmentLogout'])->name('logout');

Route::group(['prefix' => 'department','middleware' => 'departmentauth'], function () {
	// Department Dashboard
	Route::get('dashboard',[DepartmentController::class, 'dashboard'])->name('admindashboard');	
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
