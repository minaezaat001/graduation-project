<?php

namespace App\Http\Controllers;

use App\Models\AttachmentLecture;
use App\Models\Course;
use App\Models\Department;
use App\Models\Grade;
use App\Models\Instructor;
use App\Models\Lecture;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;

class instructorController extends Controller
{
 public function createLecture()
    {
          $instructor = Instructor::find(1);
         $departments=Department::all();
         $courses=Course::all();
        $grad=Grade::all();
        $lecture=Lecture::where('instructor_id','=',$instructor->id)->get();

     return view('instructor.lectures',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses,
       'lecture'=>$lecture,
    ]);
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
