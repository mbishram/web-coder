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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/blog/judul-dari-artikel-disini', 'PagesController@artikel');
Route::get('/contact', 'PagesController@contact');

// Admin
Route::get('/admin', 'PagesController@login');
Route::get('/dashboard', 'PagesController@dashboardIndex');
Route::get('/dashboard/posts', 'PagesController@dashboardPosts');
