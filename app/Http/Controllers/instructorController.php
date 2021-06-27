<?php

namespace App\Http\Controllers;

use App\Models\assiment;
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
        $instructor = Instructor::find(1);
        $lecture = Lecture::create([
         'Name' => $request->Name,
         'grade_id'=>$request->grade_id,
         'course_id'=>$request->course_id,
         'instructor_id'=>$instructor->id

        ]);

           $fileName= $request->attach->getclientoriginalname();
            $pa=  $request->attach->move('lec',$fileName);

          AttachmentLecture::create([

              'attach'=>$pa,

              'lecture_id'=>$lecture->id
          ]);

           return redirect(route('instructor.createLec'));

      // session()->get('key')
      // session(['key' => 'val'])
    }

    public function createResearch()
    {
         $instructor = Instructor::find(1);
         $departments=Department::all();
         $courses= $instructor->course;
         $grad=Grade::all();
         $getid=$instructor->id;
        $assiment= assiment::where('instructor_id','=',$getid)->where('Kind','=',0)->get();



            return view('instructor.research',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses
            ,'assiment'=>$assiment
        ]);
    }

      public function storeResearch(Request $request)
    {
          $instructor = Instructor::find(1);
        assiment::create([
           'Name'=>$request->Name,
           'course_id'=>$request->course_id,
           'grade_id'=>$request->grade_id,
           'instructor_id'=>$instructor->id,
           'Kind'=>0

        ]);

        return redirect(route('instructor.createResearch'));
    }

      public function createAssiment()
    {
          $instructor = Instructor::find(2);
          $departments=Department::all();
          $courses= $instructor->course;
          $grad=Grade::all();
          $getid=$instructor->id;
         $assiment= assiment::where('instructor_id','=',$getid)->where('Kind','=',1)->get();

            return view('instructor.assiment',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses
            ,'assiment'=>$assiment
        ]);
    }

      public function storeAssiment(Request $request)
    {
         $instructor = Instructor::find(1);
        assiment::create([
           'Name'=>$request->Name,
           'course_id'=>$request->course_id,
           'grade_id'=>$request->grade_id,
            'instructor_id'=>$instructor->id,
           'Kind'=>1

        ]);

        return redirect(route('instructor.storeAssiment'));
    }

}