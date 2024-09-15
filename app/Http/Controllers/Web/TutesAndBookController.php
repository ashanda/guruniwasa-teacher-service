<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class TutesAndBookController extends Controller
{
    //
    public function tutesBook()
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

            return view('web.tutes_books.view',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }
   

    public function tutesView(Request $request)
    {

        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/class-tute-teacher';
        $accessToken = $request->cookie('access_token');
        
       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'teacher_id' => session('teacher_data')['id'],
                    'subjects' => session('teacher_data')['subjects'][0]['subject_ids'],
                    'month'=> $request->month,

                ]
            ]);

            
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.tutes_books.tutes_view',compact('body'));
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



   public function tutesstore(Request $request)
        {
            $client = new Client();

            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/class-tute-store';
            $accessToken = $request->cookie('access_token');

            // Prepare the multipart form data
            $multipartData = [
                [
                    'name'     => 'subject_id',
                    'contents' => $request->grade_subject,  // Assuming 'grade_subject' holds the subject_id
                ],
                [
                    'name'     => 'teacher_id',
                    'contents' => $request->teacher_id,  // Assuming 'teacher_id' holds the teacher_id
                ],
                [
                    'name'     => 'lesson_title',
                    'contents' => $request->lesson_title,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'document',
                    'contents' => fopen($request->file('document')->getPathname(), 'r'),
                    'filename' => $request->file('document')->getClientOriginalName(),
                    'headers'  => [
                        'Content-Type' => $request->file('document')->getMimeType(),
                    ],
                ],
            ];

            try {
                // Make the POST request
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'multipart' => $multipartData,
                ]);

                // Check the response status
                if ($response->getStatusCode() == 200) {
                    $body = json_decode($response->getBody(), true);

                    if (isset($body['status']) && $body['status'] === 200) {
                        Alert::toast($body['message'], 'success');
                        return redirect()->back();
                    } else {
                        Alert::toast('Something went wrong with the request', 'error');
                        return redirect()->back();
                    }
                } else {
                    Alert::toast('Failed to upload the tute. Please try again.', 'error');
                    return redirect()->back();
                }
            } catch (\Exception $e) {
                // Log the error for further analysis
                Log::error('Tutesstore error: ' . $e->getMessage());

                Alert::toast('File not uploaded', 'error');
                return redirect()->back();
            }
        }
    
    

        public function destroy(Request $request){

            $client = new Client();
            $url = env('API_GETWAY_URL') . '/api/v1/class-tute-destroy';
            $accessToken = $request->cookie('access_token');
                
            
              try {
                    $response = $client->post($url, [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessToken,
                        ],
                        'query' => [
                            'id' => $request->id

                        ]
                    ]);

                    
            
                    if ($response->getStatusCode() == 200) {
                        $body = json_decode($response->getBody(), true);

                        if (isset($body['status']) && $body['status'] === 200) {
                            Alert::toast($body['message'], 'success');
                            return redirect()->back();
                        } else {
                            Alert::toast('Something went wrong with the request', 'error');
                            return redirect()->back();
                        }
                    }
            } catch (\Exception $e) {
                    //Log the error if needed and handle exceptions
                       Alert::toast('Something went wrong with the request', 'error');
                       return redirect()->back();
                }
        }



}
