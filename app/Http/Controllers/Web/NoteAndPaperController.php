<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteAndPaperController extends Controller
{
   
    public function pendingList()
    {
        try{

            return view('web.note-paper.pending_list');

        }catch(\Exception $exception){

            return;
        }
    }

    public function notePaperList()
    {
        try{

            return view('web.note-paper.list_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function noteView()
    {
        try{

            return view('web.note-paper.note_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function noteUpload()
    {
        try{

            return view('web.note-paper.note_upload');

        }catch(\Exception $exception){

            return;
        }
    }


    



    

    
}
