<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ScanQRCodeController extends Controller
{

    private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }

    public function scanQRCode()
    {
        try {
            return view('web.qr-code.scan');
        }catch (Exception $exception) { 

        }

        
    }


    public function scanQRCodeData(Request $request)
{
    $client = new Client();
    
    $url = env('API_GETWAY_URL') . '/api/v1/student-attendence';
    $accessToken = $request->cookie('access_token');
    
    try {
        $response = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'CLIENT_KEY' => $this->serverApiKey
            ],
            'form_params' => [
                'subject_id' => $request->subject,
                'user_id' => $request->auth_id,
            ]
        ]); 
        
        if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            
            if (isset($body['status']) && $body['status'] === 200) {
                return response()->json(['status' => 'success', 'message' => 'Attendance marked successfully!']);
            } else {
                return response()->json(['status' => 'error', 'message' => $body['message']]);
            }
        }
    } catch (Exception $exception) { 
        return response()->json(['status' => 'error', 'message' => $exception->getMessage()]);
    }
}

}
