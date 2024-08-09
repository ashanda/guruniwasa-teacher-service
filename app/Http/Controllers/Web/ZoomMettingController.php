<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ZoomMettingController extends Controller
{
    public function zoomMettingView(Request $request)
    {
       
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/live-lessons-teacher';
        $accessToken = $request->cookie('access_token');

       
      try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id']
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.zoom-meeting.view',compact('body'));
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
        }

    }


    public function zoomMettingList(Request $request)
    {

         $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/live-lessons-show';
        $accessToken = $request->cookie('access_token');

       
      try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'lesson_id' => $request->input('id')
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.zoom-meeting.schedule_view',compact('body'));
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
        }

    }


    public function updateLiveLesson(Request $request){
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/live-lessons-update';
        $accessToken = $request->cookie('access_token');

       
      try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'form_params' => [
                    'lesson_id' => $request->lesson_id,
                    'teacher_id' => session('teacher_data')['id'],
                    'status' => $request->input('status'),
                    'zoom_link' => $request->input('zoom_link'),
                    'zoom_password' => $request->input('password'),
                    'special_note' => $request->input('special_note'),
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
               
                if (isset($body['status']) && $body['status'] === 200) {
                    Alert::toast($body['message'], 'success');
                   return redirect()->back();
                   // return view('web.zoom-meeting.schedule_view',compact('body'));
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
        }
    }
    public function zoomSpecialClass()
    {
        try{

            return view('web.zoom-meeting.special-class');

        }catch(\Exception $exception){

            return;
        }
    }



    public function analysingReport()
    {
        try{

            return view('web.zoom-meeting.analysing-report');

        }catch(\Exception $exception){

            return;
        }
    }







}
