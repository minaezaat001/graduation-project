<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function getcourse()
    {
        $student = Student::find(1);
        $course=$student->course;
        return view('student.lectures',['course'=>$course]);
    }

    public function getlecture(Request $request)
    {
        $course= $request->course_id;
        // dd($course->lecture);
        $lecture=Lecture::where('course_id','=',$course)->get();
        return view('student.lectures',['lecture'=>$lecture]);
    }
}
