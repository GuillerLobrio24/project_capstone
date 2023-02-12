<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\OtherAnnouncementController;
use App\Http\Controllers\B1R401Controller;
use App\Http\Controllers\B1R402Controller;
use App\Http\Controllers\B1R403Controller;
use App\Http\Controllers\B1R301Controller;
use App\Http\Controllers\B1R302Controller;
use App\Http\Controllers\B1R303Controller;
use App\Http\Controllers\B1R201Controller;
use App\Http\Controllers\B1R202Controller;
use App\Http\Controllers\B1R203Controller;
use App\Http\Controllers\B2R401Controller;
use App\Http\Controllers\B2R402Controller;
use App\Http\Controllers\B2R403Controller;
use App\Http\Controllers\B2R301Controller;
use App\Http\Controllers\B2R302Controller;
use App\Http\Controllers\B2R303Controller;
use App\Http\Controllers\B2R201Controller;
use App\Http\Controllers\B2R202Controller;
use App\Http\Controllers\B2R203Controller;
use App\Http\Controllers\AddSubjectController;
use App\Http\Controllers\AddProfessorController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteDataController;

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

// Landing Page
Route::get('/', 'App\Http\Controllers\PageController@index');
Route::resource('', 'App\Http\Controllers\IndexBRController');

// Automated Deletion
Route::post('/b1r401/{id}', 'App\Http\Controllers\DeleteDataController@deleteData');
Route::post('/b1r402/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r402');
Route::post('/b1r403/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r403');
Route::post('/b1r301/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r301');
Route::post('/b1r302/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r302');
Route::post('/b1r303/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r303');
Route::post('/b1r201/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r201');
Route::post('/b1r202/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r202');
Route::post('/b1r103/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab1r203');

Route::post('/b2r401/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r401');
Route::post('/b2r402/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r402');
Route::post('/b2r403/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r403');
Route::post('/b2r301/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r301');
Route::post('/b2r302/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r302');
Route::post('/b2r303/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r303');
Route::post('/b2r201/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r201');
Route::post('/b2r202/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r202');
Route::post('/b2r103/{id}', 'App\Http\Controllers\DeleteDataController@deleteDatab2r203');





// Login & Signup Page
Route::get('/login', 'App\Http\Controllers\PageController@login');
Route::get('/signup', 'App\Http\Controllers\PageController@signup');

// Auth
Auth::routes();

// Admin Page
Route::get('/home', 'App\Http\Controllers\PageController@admin');   
Route::resource('home', 'App\Http\Controllers\InputController');
Route::get('/announcement_publish', 'App\Http\Controllers\PageController@announcement_publish');
Route::get('/otherannouncement_publish', 'App\Http\Controllers\PageController@otherannouncement_publish');

// Room Page
Route::resource('b1r401', 'App\Http\Controllers\B1R401Controller');
Route::resource('b1r402', 'App\Http\Controllers\B1R402Controller');
Route::resource('b1r403', 'App\Http\Controllers\B1R403Controller');
Route::resource('b1r301', 'App\Http\Controllers\B1R301Controller');
Route::resource('b1r302', 'App\Http\Controllers\B1R302Controller');
Route::resource('b1r303', 'App\Http\Controllers\B1R303Controller');
Route::resource('b1r201', 'App\Http\Controllers\B1R201Controller');
Route::resource('b1r202', 'App\Http\Controllers\B1R202Controller');
Route::resource('b1r203', 'App\Http\Controllers\B1R203Controller');
Route::resource('b2r401', 'App\Http\Controllers\B2R401Controller');
Route::resource('b2r402', 'App\Http\Controllers\B2R402Controller');
Route::resource('b2r403', 'App\Http\Controllers\B2R403Controller');
Route::resource('b2r301', 'App\Http\Controllers\B2R301Controller');
Route::resource('b2r302', 'App\Http\Controllers\B2R302Controller');
Route::resource('b2r303', 'App\Http\Controllers\B2R303Controller');
Route::resource('b2r201', 'App\Http\Controllers\B2R201Controller');
Route::resource('b2r202', 'App\Http\Controllers\B2R202Controller');
Route::resource('b2r203', 'App\Http\Controllers\B2R203Controller');


// Announcement Page
Route::resource('announcement', 'App\Http\Controllers\AnnouncementController');

// Other Announcement Page
Route::resource('otherannouncement', 'App\Http\Controllers\OtherAnnouncementController');

// Route::post('/b1r401', [B1R401Controller::class, 'storeDropdownValue']);

// Add Subject Page
Route::resource('subject', 'App\Http\Controllers\AddSubjectController');
Route::get('/subject_add', 'App\Http\Controllers\PageController@subject_add');

// Add Professor Page
Route::resource('professor', 'App\Http\Controllers\AddProfessorController');
Route::get('/professor_add', 'App\Http\Controllers\PageController@professor_add');


