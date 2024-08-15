<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function notePaperList(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-subjects';
        $accessToken = $request->cookie('access_token');
        
       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'subjects' => session('teacher_data')['subjects'][0]['subject_ids'],

                ]
            ]);

            
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.note-paper.list_view',compact('body'));
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
            } catch (\Exception $e) {
                    Log::error('notes and paper error: ' . $e->getMessage());

                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
            }

        
    }


    public function noteView(Request $request,$note_id)
    {

         $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-class-note';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'subject_id' => $note_id,

                ]
            ]);

 
 
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);

                if (isset($body['status']) && $body['status'] === 200) {
                              
                    return view('web.note-paper.note_view',compact('body'),compact('note_id'));
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
            } catch (\Exception $e) {
                    Log::error('notes and paper error: ' . $e->getMessage());

                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
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


    public function notePaperCreate(Request $request){

        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-class-note-store';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'subject_id' => $request->subject_id,
                    'title' => $request->title,

                ]
            ]);


 
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                  
                if (isset($body['status']) && $body['status'] === 200) {
                              
                    Alert::toast('Note or paper created', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
            } catch (\Exception $e) {
                    Log::error('notes and paper error: ' . $e->getMessage());

                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
            }
    }

    public function notePaperUpdate(Request $request){
            $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-class-note-update';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'id' => $request->id,
                    'title' => $request->title,

                ]
            ]);

 
 
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);

                if (isset($body['status']) && $body['status'] === 200) {
                              
                    Alert::toast('Note or paper Updated', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
            } catch (\Exception $e) {
                    Log::error('notes and paper error: ' . $e->getMessage());

                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
            }
    }

    public function notePaperDestroy(Request $request){
            $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-class-note-destroy';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'id' => $request->id,

                ]
            ]);

 
 
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);

                if (isset($body['status']) && $body['status'] === 200) {
                              
                    Alert::toast('Note or paper deleted', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
            } catch (\Exception $e) {
                    Log::error('notes and paper error: ' . $e->getMessage());

                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
            }
    }
    



    

    
}
