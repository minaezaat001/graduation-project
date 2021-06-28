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


    public function getLecByCourse(Course $course)
    {

      return view('student.lecturesByCources',['course'=>$course]);
    }

    public function getlecture()
    {
        $student =Auth::user()->student;
        $course=$student->course;
        return view('student.lectures',['course'=>$course]);
    }

    public function postlecture(Request $request)
    {
        $course= $request->course_id;
        // dd($course->lecture);
        $lecture=Lecture::where('course_id','=',$course)->get();
        return view('student.lectures',['lecture'=>$lecture]);
    }

    public function assimentget()
    {
        $student =Auth::user()->student;
        $course=$student->course;
        return view('student.assiment',['course'=>$course]);
    }

    public function assimentpost(Request $request)
    {
        $course= $request->course_id;
        $assiment = assiment::where('course_id','=',$course)->where('Kind','=',1)->get();

        return view('student.assiment',['assiment'=>$assiment]);

    }
    public function researchget()
    {
        $student =Auth::user()->student;
        $course=$student->course;
        return view('student.research',['course'=>$course]);
    }

    public function researchpost(Request $request)
    {
        $course= $request->course_id;
        $assiment = assiment::where('course_id','=',$course)->where('Kind','=',0)->get();
        return view('student.research',['assiment'=>$assiment]);

    }





}
