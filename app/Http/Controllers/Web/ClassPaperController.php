<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClasspaperController extends Controller
{
    public function classPaper()
    {
        try{

            return view('web.class_paper.view');

        }catch(\Exception $exception){

            return;
        }
    }
 

    public function classPaperView()
    {
        try{

            return view('web.class_paper.paper_view');

        }catch(\Exception $exception){

            return;
        }
    }


}


