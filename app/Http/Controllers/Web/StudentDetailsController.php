<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class StudentDetailsController extends Controller
{
    public function studentDetails(Request $request)
    {

         $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/teacher-subjects-count';
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
                   
                    return view('web.student_details.view',compact('body'));
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



    public function studentDetailsView()
    {
        try{

            return view('web.student_details.viewTable');

        }catch(\Exception $exception){

            return;
        }
    }


    public function studentPaymentView()
    {
        try{

            return view('web.student_details.payment_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function inactiveAccount()
    {
        try{

            return view('web.student_details.inactive_account');

        }catch(\Exception $exception){

            return;
        }
    }


    public function nonPaid()
    {
        try{

            return view('web.student_details.non_paid_account');

        }catch(\Exception $exception){

            return;
        }
    }







}
