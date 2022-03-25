<?php

namespace App\Http\Controllers;

use App\Models\settlement;
use App\Models\payout;
use App\Models\merchant;
use App\Models\customer;
use App\Models\User;
use App\Models\bankaccount;
use App\Models\bank_account;
use App\Models\bank_account_payouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class settlementController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settlements = settlement::all();
        // dd($settlements);
        return view('settlement/index', compact('settlements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $merchants = merchant::all();
        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id');
        return view('settlement/create',compact('merchants','bankaccounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $settlement = new settlement();
        $settlement->id = $request->id;
        $settlement->merchant_fk_id = $request->merchant_fk_id;
        $settlement->bank_account_from_fk_id = $request->bank_account_from_fk_id;
        $settlement->bank_account_to_fk_id = $request->bank_account_to_fk_id;
        $settlement->settlement_amount = $request->settlement_amount;
        $settlement->remarks = $request->remarks;
        $settlement->reference_id = $request->reference_id;
        $settlement->status_of_settlement = $request->status_of_settlement;
       
        if ($request->rr_settlement == 'on')
         {
            $settlement->rr_settlement = 1;
        }
         else 
        {
            $settlement->rr_settlement = 0;
        }

        $file = $request->upload_settlement_invoice;
        if ($request->upload_settlement_invoice) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;

                $file->move('public/images/', $filename);
                $settlement->upload_settlement_invoice = $filename;
            } else {
                return back()->with('error', 'Please upload Settlement Invoice');
            }
        }
        $settlement->save();

        return redirect('settlement/index')->with('success', 'settlement Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

 
}