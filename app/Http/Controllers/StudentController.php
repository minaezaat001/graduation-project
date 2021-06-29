<?php

namespace App\Http\Controllers;

use App\Models\assiment;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //

    public function index()
    {
       $student =Auth::user()->student;
        $course=$student->course;
         return view('student.index',['course'=>$course]);
    }


    public function getLecByCourse(Course $selectedcourse)
    {

       $student =Auth::user()->student;
        $course=$student->course;

      return view('student.lectures',['course'=>$course,'selectedcourse'=>$selectedcourse]);
    }

    public function getlecture()
    {

        $student =Auth::user()->student;
        $course=$student->course;
        return view('student.lectures',['course'=>$course]);
    }

    public function postlecture(Request $request)
    {
        $student =Auth::user()->student;
        $course=$student->course;
        $selectedcourse= Course::where('id','=',$request->course_id)->first();


        return view('student.lectures',['course'=>$course ,'selectedcourse'=>$selectedcourse]);
    }

    public function assimentget()
    {
        $student =Auth::user()->student;
        $course=$student->course;
        return view('student.assiment',['course'=>$course]);
    }

    public function assimentpost(request $request)
    {

        $student =Auth::user()->student;
        $course=$student->course;

        $selectedcourse =Course::find($request->course_id);



        return view('student.assiment',['course'=>$course,'selectedcourse'=>$selectedcourse]);

    }
    public function researchget()
    {
         $student =Auth::user()->student;
        $course=$student->course;
        return view('student.research',['course'=>$course]);
    }

    public function researchpost(Request $request)
    {
        $student =Auth::user()->student;
        $course=$student->course;

        $selectedcourse =Course::find($request->course_id);
          return view('student.research',['course'=>$course,'selectedcourse'=>$selectedcourse]);


    }

    public function getUploadAssimentOrResearch(assiment $assiment)
    {
        // $stu=Auth::user();
        // dd($assiment,$stu);
      return view('student.uploadAssimentAndReseach');
    }

    public function uploadAssimentOrResearch(Request $request)
    {
        dd($request->all());
    }






}