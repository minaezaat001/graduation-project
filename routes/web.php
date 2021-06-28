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


Route::get('/', function () {
    return view('login');
});










################################# Start Instructor Routes #################################

Route::prefix('instructor')->group(function () {
         Route::get('/getStudentsResearches/{assiment}','instructorController@getStudentsResearch')->name('instructor.StudentsResearches');


    Route::get('/createLec','instructorController@createLecture')->name('instructor.createLec');
    Route::post('/storeLec','instructorController@storLecture')->name('instructor.storeLec');

    Route::get('/createAssiment','instructorController@createAssiment')->name('instructor.createAssiment');
    Route::post('/storeAssiment','instructorController@storeAssiment')->name('instructor.storeAssiment');


     Route::get('/createResearch','instructorController@createResearch')->name('instructor.createResearch');
     Route::post('/storeResearch','instructorController@storeResearch')->name('instructor.storeResearch');



});




################################# End Instructor Routes ###################################







################################# Start Student Routes #################################

Route::prefix('student')->group(function () {

     Route::get('/index','StudentController@index')->name('student.index');


    Route::get('/getlecture','StudentController@getlecture')->name('student.getlecture');

    Route::post('/postlecture','StudentController@postlecture')->name('student.postlecture');
    Route::get('/assimentget','StudentController@assimentget')->name('student.assimentget');

    Route::post('/assimentpost','StudentController@assimentpost')->name('student.assimentpost');

         Route::get('/{course}','StudentController@getLecByCourse')->name('student.getLecByCourse');


    });



################################# End Student Routes #################################





 Route::post('/login','authController@login')->name('auth.login');
    Route::get('/test', 'authController@any')->name('test');

Route::get('/signup' , 'authController@getSignup');

Route::post('/signup' , 'AuthController@postSignup')->name('auth.signup.post');


Route::get('logout', function () {
    Auth::logout();
})->name('auth.logout');
