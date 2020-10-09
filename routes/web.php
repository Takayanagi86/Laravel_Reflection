<?php

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/companies', [App\Http\Controllers\CompaniesController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [App\Http\Controllers\CompaniesController::class, 'create'])->name('companies.create');
Route::post('/companies', [App\Http\Controllers\CompaniesController::class, 'store'])->name('companies.store');
Route::get('/companies/{id}', [App\Http\Controllers\CompaniesController::class, 'show'])->name('companies.show');
Route::get('/companies/{id}/edit', [App\Http\Controllers\CompaniesController::class, 'edit'])->name('companies.edit');
Route::post('/companies/{id}', [App\Http\Controllers\CompaniesController::class, 'update'])->name('companies.update');
Route::delete('/companies/{id}', [App\Http\Controllers\CompaniesController::class, 'destroy'])->name('companies.destroy');

Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [App\Http\Controllers\EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [App\Http\Controllers\EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('employees.show');
Route::get('/employees/{id}/edit', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('employees.edit');
Route::post('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('employees.destroy');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
