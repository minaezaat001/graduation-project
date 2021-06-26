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

Route::get('/', function () {
    return view('welcome');
});


 // Start  Just For Test//
Route::get('/lec', function () {
    return view('instructor.lectures');
})->name('instructor.lectures');

Route::get('/research', function () {
    return view('instructor.research');
})->name('instructor.research');


Route::get('/assiment', function () {
    return view('instructor.assiment');
})->name('instructor.assiment');

Route::get('/quiz', function () {
    return view('instructor.quiz');
})->name('instructor.quiz');







################################# Start Instructor Routes #################################

Route::prefix('instructor')->group(function () {

    Route::get('/createLec','instructorController@createLecture')->name('instructor.createLec');
      Route::post('/storeLec','instructorController@storLecture')->name('instructor.storeLec');

});

Route::prefix('instructor')->group(function () {

    Route::get('/createResearch','instructorController@createResearch')->name('instructor.createResearch');
     Route::post('/storeResearch','instructorController@storeResearch')->name('instructor.storeResearch');

});


Route::prefix('instructor')->group(function () {

    Route::get('/createAssiment','instructorController@createAssiment')->name('instructor.createAssiment');
     Route::post('/storeAssiment','instructorController@storeAssiment')->name('instructor.storeAssiment');
});


################################# End Instructor Routes ###################################


################################# Start Student Routes #################################

Route::prefix('student')->group(function () {
    Route::get('/getcourse','StudentController@getcourse')->name('student.getcourse');

    Route::post('/getlecture','StudentController@getlecture')->name('student.getlecture');

    });

################################# End Student Routes #################################