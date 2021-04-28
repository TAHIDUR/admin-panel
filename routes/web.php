<?php

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

Route::get('index', 'DashboardController@index')->name('index');
Route::get('table', 'DashboardController@table')->name('table');
Route::get('chartjs', 'DashboardController@chartjs')->name('chartjs');
Route::get('simple', 'DashboardController@simple')->name('simple');
Route::get('general', 'DashboardController@general')->name('general');
Route::get('buttons', 'DashboardController@buttons')->name('buttons');
Route::get('main/component', 'DashboardController@main')->name('component.main');
Route::get('toastr', 'DashboardController@toastr')->name('toastr');
Route::get('ion', 'DashboardController@ion')->name('ion');
Route::get('fontawesome', 'DashboardController@fontawesome')->name('fontawesome');
Route::get('flag', 'DashboardController@flag')->name('flag');
