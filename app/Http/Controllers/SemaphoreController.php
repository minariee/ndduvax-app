<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SMS;

class SemaphoreController extends Controller
{
    public function index() {
        //$users =User::select('mobile_number')->get();
        $users =User::all('mobile_number');
        foreach ($users as $user) {
            $user->mobile_number;    
        }
        return view('smsemaphore', [
            'page_substitle' => 'SMS',
            'users' => $users
    
        ]);
    }
    public function send(User $users,Request $request){
        $users =User::all('mobile_number');
        foreach ($users as $user) {
           
            $user->mobile_number;
            $ch = curl_init();
            $mobiles = $user->mobile_number;  
            $message = $request->input('message');
            
            $parameters = array(
                'apikey' => env('SEMAPHORE_KEY'), //Your API KEY
                'number' => $mobiles,
                'message' => $message,
                'sendername' => 'SEMAPHORE'
            );

            curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
            curl_setopt( $ch, CURLOPT_POST, 1 );
    
            //Send the parameters set above with the request
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
    
            // Receive response from server
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            $output = curl_exec( $ch );
            curl_close ($ch);
        }
      
        //Show the server response
        return view('smsemaphore')->with('successMsg','Message sent successfully .');
    }    
}