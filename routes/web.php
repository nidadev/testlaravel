<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'web' ],function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-company', [CompaniesController::class, 'addCompany'])->name('company.add');
Route::get('/edit-company/{id}', [CompaniesController::class, 'editCompany'])->name('company.edit');
Route::get('/delete-company/{id}', [CompaniesController::class, 'deleteCompany'])->name('company.delete');

Route::post('/add-company', [CompaniesController::class, 'saveCompany'])->name('save.company');
Route::get('/company-list', [CompaniesController::class, 'listCompany'])->name('list.company');
Route::post('/update-company', [CompaniesController::class, 'updateCompany'])->name('update.company');
});




