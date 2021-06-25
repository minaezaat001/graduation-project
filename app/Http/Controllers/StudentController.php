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
        return view('student.',['course'=>$course]);

    }

    public function getlecture(Request $request)
    {
        $course= $request->coursename;
        $lecture=Lecture::where('course_id','=',$course);
        return view('student.',['lecture'=>$lecture]);
    }
}
