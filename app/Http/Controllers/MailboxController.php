<?php

namespace App\Http\Controllers;

use App\Models\mailbox;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailboxes = mailbox::where('to_id',Auth::user()->id)->get();
        $userpluck = User::pluck('first_name', 'id');
       
        return view('mailbox/index', compact('mailboxes', 'userpluck'));
    }

    public function sent()
    {
        $mailboxes = mailbox::where('from_id',Auth::user()->id)->get();
        $userpluck = User::pluck('first_name', 'id');
       
        return view('mailbox/sent', compact('mailboxes', 'userpluck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merchant_superadmin_users = User::where('role', 'Merchant Superadmin')->get();
        $admin_id = User::where('role','Admin')->first()->id;
        // dd($admin_id);
        return view('mailbox/create', compact('merchant_superadmin_users','admin_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mailbox = new mailbox();
        $mailbox->from_id = Auth::user()->id;
        $mailbox->to_id = $request->mail_to;
        $mailbox->subject = $request->subject;
        $mailbox->message = $request->message;
        $mailbox->save();

        $user = User::find($request->mail_to);
        $arr = array();
        $arr['email'] = $user->email;
        $arr['subject'] = 'New Email From Admin - Payment Portal';
        $data = array('name'=>$user->first_name,'body'=>$request->message);
        Mail::send('test', $data, function ($message) use ($arr) {
            $message->from('surajbhadoriya401@gmail.com', "Payment Portal ")->to($arr['email'])->subject($arr['subject']);
        });
       // dd("sent");
        return redirect('mailbox/index')->with('success', 'Message Sent Successfully');
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
