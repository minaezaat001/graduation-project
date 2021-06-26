<?php

namespace App\Http\Controllers;

use App\Models\assiment;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function getlecture()
    {
        $student = Student::find(1);
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
        $student = Student::find(1);
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
        $student = Student::find(1);
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
