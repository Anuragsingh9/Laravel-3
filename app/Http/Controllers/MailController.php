<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Anurag';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'anuragsingh9999999';
        $objDemo->receiver = 'singhroshanb1';
 
        Mail::to("h.jangir1998@gmail.com")->send(new DemoEmail($objDemo));
         return ('Mail snet');
    }
}