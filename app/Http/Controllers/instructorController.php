<?php

namespace App\Http\Controllers;

use App\Models\AttachmentLecture;
use App\Models\Course;
use App\Models\Department;
use App\Models\Grade;
use App\Models\Instructor;
use App\Models\Lecture;
use Illuminate\Http\Request;

class instructorController extends Controller
{
 public function createLecture()
    {
        $departments=Department::all();
        $grad=Grade::all();
        $courses=Course::all();
        $instructor = Instructor::find(1);

     return view('instructor.lectures',['departments'=>$departments,'grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses]);
    }
    

    public function storLecture(Request $request)
    {
        // dd($request->all());
        $lecture = Lecture::create([
         'Name' => $request->Name,
         'grade_id'=>$request->grade_id,
         'course_id'=>$request->course_id
        ]);

    //  $request->file('attach')->storeAs('public/lectures','') ;

          AttachmentLecture::create([

              'attach'=>$request->attach,

              'lecture_id'=>$lecture->id
          ]);

           return redirect(route('instructor.createLec'));

      // session()->get('key')
      // session(['key' => 'val'])



    }

}