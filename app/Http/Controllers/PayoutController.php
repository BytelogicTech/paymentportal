<?php

namespace App\Http\Controllers;

use App\Models\payout;
use Illuminate\Http\Request;

class PayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payouts = payout::all();
        

        return view('payout/index', compact('payouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payouts = payout::all();
        

        return view('payout/create', compact('payouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function show(payout $payout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function edit(payout $payout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payout $payout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function destroy(payout $payout)
    {
        //
    }
}
