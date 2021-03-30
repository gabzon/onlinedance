<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function about()
    {
        return view('pages/about');
    }

    public function terms()
    {
        return view('pages/terms');
    }

    public function policy()
    {
        return view('pages/policy');
    }

    public function emailForm()
    {        
        return view('pages/send-email');   
    }

    public function sendEmail(Request $request)
    {
        Mail::raw($request->message, function ($message) {                    
            $message->to('gabriel.zambrano@protonmail.com', 'Gabriel Zambrano');                                
            $message->subject('Finally!');                        
        });

        if( count(Mail::failures()) > 0 ) {

            echo "There was one or more failures. They were: <br />";
         
            foreach(Mail::failures() as $email_address) {
                echo " - $email_address <br />";
             }
         
         } 
        //  else {
        //      echo "No errors, all sent successfully!";
        //  }
        
        return redirect()->route('email-form')->with('success', 'Email sent!');
    }

}
