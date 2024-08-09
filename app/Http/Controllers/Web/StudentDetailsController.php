<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function studentDetails()
    {
        try{

            return view('web.student_details.view');

        }catch(\Exception $exception){

            return;
        }
    }



    public function studentDetailsView()
    {
        try{

            return view('web.student_details.viewTable');

        }catch(\Exception $exception){

            return;
        }
    }


    public function studentPaymentView()
    {
        try{

            return view('web.student_details.payment_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function inactiveAccount()
    {
        try{

            return view('web.student_details.inactive_account');

        }catch(\Exception $exception){

            return;
        }
    }


    public function nonPaid()
    {
        try{

            return view('web.student_details.non_paid_account');

        }catch(\Exception $exception){

            return;
        }
    }







}
