<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function sendmail()
    {
        
       $data = ['name'=>"Basant",'msg'=>"Hello Basant Mallick"];
       
       $user['to']="basantmallick94@gmail.com";

       Mail::send('mailer_template',$data,function($messages) use ($user)
            {
                $messages->to($user['to']);
                $messages->subject('Hello Developer');
            }
       );
        
        
        
        
        //return view('mailer_template');

        dd('Mail Sent');
    }
        

}

?>