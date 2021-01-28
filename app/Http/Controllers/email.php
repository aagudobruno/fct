<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class email extends Controller
{
    public function mail(){
        $to_name = 'adri';
        $to_email = 'aagudo1818@gmail.com';
        $data = array('name'=>"Adri", "body" => "Hola, que tal?");
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('aagudo@cifpfbmoll.eu','Test Mail');
        });
    }    
}
