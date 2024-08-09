<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentApprovalController extends Controller
{
    public function studentApproval()
    {
        try{

            return view('web.student_approval.view');

        }catch(\Exception $exception){

            return;
        }
    }
    public function scholarshipdetails()
    {
        try{

            return view('web.student_approval.scholarship');

        }catch(\Exception $exception){

            return;
        }
    }




    public function otherGrade()
    {
        try{

            return view('web.student_approval.other_grade');

        }catch(\Exception $exception){

            return;
        }
    }



    public function freeVideo()
    {
        try{

            return view('web.student_approval.free_video');

        }catch(\Exception $exception){

            return;
        }
    }












}
