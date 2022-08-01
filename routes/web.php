<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrerController;
use App\report_user;

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


Route::get('/home/portfolio/project', function () {
    return view('portfolio.project');
})->name('show_portfolio');

Route::get('/home/news/detail', function () {
    return view('home.news.detail');
})->name('news_detail');

Route::get('components/report','ReportController@create')->name('create-report');
Route::post('components/report',[ReportController::class, 'store'])->name('simpan-report');

Route::get('/login', [LoginController::class, 'loginpage'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('loginpost');


Route::get('/homepagenews', function () {
    return view('home.index');
})->name('newsadmin');

// Admin
Route::get('/admin/news', [AdminController::class, 'newspage'])->name('all-news');
Route::get('/admin/addnews', [AdminController::class, 'addnews'])->name('tambahnews');
Route::get('/admin', [AdminController::class, 'indexnews'])->name('indexnews');
Route::post('/admin/addnews', [AdminController::class, 'postnews'])->name('inipostnews');
Route::post('/home', [AdminController::class, 'postcontact'])->name('inipostcontact');
Route::get('/report', [AdminController::class, 'indexreport'])->name('indexreport');


//home
Route::get('/', [HomeController::class, 'heroindex'])->name('indexhero');
Route::get('/home/news/all', [HomeController::class, 'newsindex'])->name('newspageindex');
Route::get('/home/news/{id}', [HomeController::class, 'detailnews'])->name('newsdetail');

//carrer
Route::get('/home/carrer', [CarrerController::class, 'carrerindex'])->name('indexcarrer');
Route::get('/home/carrer/detail', [CarrerController::class, 'carrerdetail'])->name('detailcarrer');

