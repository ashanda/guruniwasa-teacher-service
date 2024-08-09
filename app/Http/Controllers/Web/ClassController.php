<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
      public function classView()
    {
        try{

            return view('web.classes.view');

        }catch(\Exception $exception){

            return;
        }
    }

}
