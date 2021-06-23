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

// End  Just For Test//

// test for ahdoia
Route::get('/ahdota', function () {
    return 'اهدويا الاعسولا ';
});



// anan memememmemem