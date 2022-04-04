<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function test()
     {
        $arr = array();
        $arr['email'] = 'bytelogicindia@gmail.com';
        $arr['subject'] = 'Hello Testing Email';
       
        $data = array('name'=>'Suraj Bhadoriya');
        Mail::send('test', $data, function ($message) use ($arr) {
            $message->from('dheeraj@gmail.com', "Payment Portal ")->to($arr['email'])->subject($arr['subject']);
        });
        dd("sent");
     }
    public function index()
    {
        return view('home');
    }
}
