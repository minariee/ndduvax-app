<?php
namespace App\Services;
use App\Models\User;

class SMS {
    protected $message;
    
    function send($recipients = [], $message) {
        $this->message = $message;
        $ch = curl_init();
        $parameters = array(
            'apikey' => env('SEMAPHORE_KEY'), //Your API KEY
            'number' => implode(',',$recipients),
            'message' => $this->message,
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

        //Show the server response
        return $output;

    }
}