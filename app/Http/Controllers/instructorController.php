<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use App\Models\Instructor;
use Illuminate\Http\Request;

class instructorController extends Controller
{
 public function createLecture()
    {
        $departments=Department::all();
        $grad=Grade::all();
        $instructor = Instructor::find(1);


     return view('instructor.lectures',['departments'=>$departments,'grades'=>$grad,'instructor'=>$instructor]);
    }

    public function storLecture()
    {
      // session()->get('key')


    }

}