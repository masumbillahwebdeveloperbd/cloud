<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{
        public function mailContact(Request $request){
       $emailData=array();
       $emailData['email']=$request->email;
       $emailData['f_name']=$request->f_name;
       $emailData['l_name']=$request->l_name;
       $emailData['mess']=$request->message;
       $emailData['phone']=$request->phone;
      Mail::send('frontEnd.email.customerEmail', $emailData, function($message) use($emailData) {

                 $message->to('feroztrading123@gmail.com');
                 $message->subject('This is mail Confirmation');
                 $message->cc('masumbillah.webdeveloper@gmail.com');
        });

        return redirect()->back();
    }
    public function mailAppointment(Request $request){
       $emailData=array();
       $emailData['name']=$request->name;
       $emailData['email']=$request->email;
       $emailData['phone']=$request->phone;
      Mail::send('frontEnd.email.appointmentEmail', $emailData, function($message) use($emailData) {
                 $message->to('feroztrading123@gmail.com');
                 $message->subject('This is mail Confirmation');
                 $message->cc('masumbillah.webdeveloper@gmail.com');
  
        });

        return redirect()->back();
    }
}
