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

Route::prefix('admin')->group(function() {
    Route::get('/course', 'CourseController@course')->name('admin.course');
    Route::post('/course/store', 'CourseController@create')->name('course.store');
    Route::get('/course/delete/{id}', 'CourseController@delete')->name('course.delete');
});
