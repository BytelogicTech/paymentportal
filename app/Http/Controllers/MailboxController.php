<?php

namespace App\Http\Controllers;

use App\Models\mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mailbox/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mailbox/create');
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
     * @param  \App\Models\mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function show(mailbox $mailbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function edit(mailbox $mailbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mailbox $mailbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(mailbox $mailbox)
    {
        //
    }
}
