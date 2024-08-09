<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentVideoController extends Controller
{
    public function studentVideo()
    {
        try{

            return view('web.student_video.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function studentVideoSubject()
    {
        try{

            return view('web.student_video.video_subject');

        }catch(\Exception $exception){

            return;
        }
    }

}
