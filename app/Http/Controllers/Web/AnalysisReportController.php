<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalysisReportController extends Controller
{

    public function analysis()
    {
        try{

            return view('web.analysis-report.view');

        }catch(\Exception $exception){

            return;
        }
    }














    public function analysisReport()
    {
        try{

            return view('web.analysis-report.view_table');

        }catch(\Exception $exception){

            return;
        }
    }
}
