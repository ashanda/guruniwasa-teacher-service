<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonthlyIncomeController extends Controller
{
    public function monthlyIncome()
    {
        try{

            return view('web.monthly-income.view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function monthlyIncomeView()
    {
        try{

            return view('web.monthly-income.view_chart');

        }catch(\Exception $exception){

            return;
        }
    }
}
