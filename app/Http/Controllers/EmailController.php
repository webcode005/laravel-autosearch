<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function sendmail()
    {
        
       $data = ['name'=>"Basant",'msg'=>"Hello Basant Mallick"];
       
       $user['to']="justfordemo2017@gmail.com";

       Mail::send('mailer_template',$data,function($messages) use ($user)
            {
                $messages->to($user['to']);
                $messages->subject('Shopping Wheel Password reset');
            }
       );
        
        
        
        
        //return view('mailer_template');

        dd('Mail Sent');
    }
        

}

?>