<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function index(){
        return view('mail.index');
    }

    public function mailPost(Request $request){
        // Mail::send('mail.sendmail',[
        //     'data' => $request->message
        // ],function($message) use ($request){
        //     $message->to();
        //     $message->subject($request->subject);
        // });
        $input = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'bodyMessage' => $request->input('message'),
        ];
        Mail::send('mail.sendmail', $input, function($mail) use($input) {
            $mail->from('alfahadhossain121@gmail.com','alfahad hossain')
                ->to($input['email'],$input['subject'])
                ->subject('subject project');
            
         });

         return redirect()->back()->with('success','mail send successfully');
    }
}


