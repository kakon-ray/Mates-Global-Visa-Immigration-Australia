<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'AllController@index')->name('index');
Route::get('/about', 'AllController@about')->name('about');

Route::get('/educationadmission', 'AllController@educationadmission')->name('educationadmission');
Route::post('/educationadmission', 'AdmissionformController@create')->name('admission.create');

Route::get('/migration', 'AllController@migration')->name('migration');
Route::post('/migration', 'MigrationformController@create')->name('migration.create');

Route::get('/jobassisstance', 'AllController@jobassisstance')->name('jobassisstance');

Route::get('/accomidation', 'AllController@accomidation')->name('accomidation');
Route::get('/careerdevelopmentservices', 'AllController@careerdevelopmentservices')->name('careerdevelopmentservices');
Route::get('/shortcoarse', 'AllController@shortcoarse')->name('shortcoarse');
Route::get('/carrerconsultancy', 'AllController@carrerconsultancy')->name('carrerconsultancy');

Route::get('/contact', 'AllController@contact')->name('contact');
Route::post('/create', 'ContactController@create')->name('create');

Route::get('/mi7', 'MisevenController@create')->name('mi7.create');
Route::post('/mi7', 'MisevenController@store')->name('mi7.store');
Route::get('/mi7/list', 'MisevenController@index')->name('mi7.index');

//Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/home', 'HomeController@index')->name('home');
