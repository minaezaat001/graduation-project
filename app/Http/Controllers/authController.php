<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
    //     session(['key' => 'val']);
    //    session()->get('key');




     if(Auth::attempt(['email' => $request->email , 'password' => $request->password] , true)){

           $kind=Auth::user()->kind;

           switch ($kind) {
               case 'inst':
                  return redirect(route('instructor.createLec'));
                   break;

                case 'stu':
                  return redirect(route('student.index'));
                   break;

               default:
                   return 'Not Found';
                   break;
           }

    }else{
          return 'kosomakk mesh tmam';
     }

      }



        public function postSignup(Request $request){
        //Validate the request

         $HashedPassword = Hash::make($request->password); //Make The Password Hashed
            $User = User::create([
                'email'=>$request->email,
                'password'=>$HashedPassword,
                'kind'=>$request->kind

            ]);
            return 'Done';

    }


    public function getSignup()
    {
        return view('signup');
    }


}