<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\TeamController;
use \App\Http\Controllers\NewsController;
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




Route::get('/projects', [ ProjectController::class, 'project'])->name('projects_page'); 
Route::get('/projects/{id}', [ ProjectController::class, 'toproject'])->name('project'); 

Route::get('/team', [ TeamController::class, 'team'])->name('team_page');
Route::get('/team/{id}', [ TeamController::class, 'toCurentTeamItem'])->name('curentTeamItem');

Route::get('/news', [ NewsController::class, 'news'])->name('news_page'); 
Route::get('/news/{id}', [ NewsController::class, 'tonews'])->name('news_item'); 

Route::get('/info',function(){
    return view('pages.buro');
})->name('buro_page');

Route::get('/contacts',function(){
    return view('pages.contacts');
})->name('contacts_page');

Route::get('/', function () {
    return view('pages.index');
})->name('index');


