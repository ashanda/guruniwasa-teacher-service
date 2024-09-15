<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    public function videoView()
    {
            try{
                $months = [
                ["english" => "JANUARY", "local" => "ජනවාරි"],
                ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
                ["english" => "MARCH", "local" => "මාර්තු"],
                ["english" => "APRIL", "local" => "අප්‍රේල්"],
                ["english" => "MAY", "local" => "මැයි"],
                ["english" => "JUNE", "local" => "ජූනි"],
                ["english" => "JULY", "local" => "ජූලි"],
                ["english" => "AUGUST", "local" => "අගෝස්තු"],
                ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
                ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
                ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
                ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
            ];

           $currentMonth = date('n'); 
           return view('web.videos.view',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoMonthlyView()
    {
        try{

            return view('web.videos.monthly_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoMonthlyListView()
    {
        
        try{

            return view('web.videos.monthly_list');

        }catch(\Exception $exception){

            return;
        }
    }

    
    public function videoMonthlySet()
    {
        try{

            return view('web.videos.monthly_set');

        }catch(\Exception $exception){

            return;
        }
    }


    


    public function videoSubjectView()
    {
        try{

            return view('web.videos.subject_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoSubjectList(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/video-recordings-teacher';
        $accessToken = $request->cookie('access_token');

       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'month'=> $request->month
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.videos.subject_list',compact('body'));
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
      } catch (\Exception $e) {
            //Log the error if needed and handle exceptions
                   $homeHeader = 1;
                   $homeFooter= 1;
                   return view('web.auth.login',compact('homeHeader','homeFooter'));
        }


    }

    public function videoUpdate(Request $request){
       $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/video-recordings-update';
        $accessToken = $request->cookie('access_token');

       
      try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'form_params' => [
                    'id' => $request->id,
                    'lesson_title' =>  $request->lesson_title,
                    'video_url1' => $request->video_url1,
                    'video_url2' => $request->video_url2,
                    'video_thumb' => $request->video_thumb,
                    'status' => $request->status

                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    Alert::toast($body['message'], 'success');
                    return redirect()->back();
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


}
