<?php

namespace App\Http\Controllers;

use App\Models\logger;
use App\Models\User;
use App\Models\customer;
use Illuminate\Http\Request;

class LoggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $logger = logger::orderBy('id', 'DESC')->get();
        $userpluck = User::pluck('first_name', 'id');

        return view('logger/index',compact('logger','userpluck'));
    }

   
}
