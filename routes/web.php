<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

use App\Http\Controllers\RelationController;
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

########### Begin one to one relationship ###########

Route::get('/article','RelationController@getImage');
Route::get('/has-one-reverse','RelationController@getPost');
Route::get('/get-post-has-img','RelationController@getPostHasImg');
Route::get('/get-post-not-has-img','RelationController@getPostNotHasImg');
Route::get('/get-post-not-has-img-with-condition','RelationController@getPostHasImgWithCondition');

########### End one to one relationship ###########




########### Begin one to many relationship ###########

Route::get('/hospital-has-many','RelationController@getHospitalDoctor');
Route::get('/hospital-has-doctors','RelationController@getHospitalHasDoctors');
Route::get('/hospital-not-has-doctors','RelationController@getHospitalNotHasDoctors');




########### End one to many relationship ###########




Route::get('/hospitals','RelationController@hospitals')->name('hospital.all');
Route::get('/doctors/{hospital_id}','RelationController@doctors')->name('hospital.doctors');


//delete hospitals with their doctors
Route::get('/hospitals/{hospital_id}','RelationController@deleteHospital')->name('hospital.delelte');




########### Begin Many to Many relationship ###########

Route::get('doctors-services','RelationController@getDoctorServices');
Route::get('services-doctors','RelationController@getServiceDoctors');


########### End Many to Many relationship ###########