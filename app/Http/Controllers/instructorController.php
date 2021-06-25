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

use function GuzzleHttp\Promise\all;

class instructorController extends Controller
{
 public function createLecture()
    {
          $instructor = Instructor::find(1);
         $departments=Department::all();
         $courses=Course::where('instructor_id','=',$instructor->id)->get();
        $grad=Grade::all();
     return view('instructor.lectures',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses]);
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


    public function createResearch()
    {

         $instructor = Instructor::find(1);
         $departments=Department::all();
         $courses=Course::where('instructor_id','=',$instructor->id)->get();
        $grad=Grade::all();
        return view('instructor.research',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses]);

    }

     public function storResearch(Request $request)
    {

       assiment::create([
           'Name'=>$request->name,
           'Kind'=>0,
           'course_id '=>$request->course_id,
           'grade_id '=>$request->grade_id,

       ]);
       return redirect(route('instructor.createResearch'));
    }

     public function createTask()
    {

         $instructor = Instructor::find(1);
         $departments=Department::all();
         $courses=Course::where('instructor_id','=',$instructor->id)->get();
        $grad=Grade::all();
        return view('instructor.assiment',['grades'=>$grad,'instructor'=>$instructor,'courses'=>$courses]);

    }

     public function storTask(Request $request)
    {

       assiment::create([
           'Name'=>$request->name,
           'Kind'=>1,
           'course_id '=>$request->course_id,
           'grade_id '=>$request->grade_id,
       ]);
       return redirect(route('instructor.storeTask'));
    }


}