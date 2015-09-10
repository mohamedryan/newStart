<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SendMessage extends Controller
{
    

   
    public function send(ContactFormRequest $request)
     {


            // $contactEmail = trim(explode(",", trim(Contact::all()->first()->lists('emails')[0],','))[0]);
            
            // if($contactEmail == "") $contactEmail ="";
        // dd('sdkjfdjhfgdjfgs');
            
            $to = 'ibrahimramdan59@gmail.com'; /*Your Email*/
            $subject = "newStart"; /*Issue*/
            $date = date ("l, F jS, Y");
            $time = date ("h:i A");
            $Email= $request->email;

            $msg="
            Name: $request->name
            Email: $Email

            Message sent from Euro Soccer Academy on date  $date, hour: $time.\n

            Message:
            $request->message";

            $sendMail = mail($to, $subject, $msg, "From: $Email");
            if ($sendMail) {
                return response()->json(['name' => 'success', 'state' => 'success']);
            }else{
                return response()->json(['name' => 'errors', 'state' => 'errors']);
            }

          

     }


}
