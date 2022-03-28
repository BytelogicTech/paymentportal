<?php

namespace App\Http\Controllers;

use App\Models\settlement;
use App\Models\payout;
use App\Models\merchant;
use App\Models\customer;
use App\Models\User;
use App\Models\settlementaccount;
use App\Models\bankaccount;
use App\Models\bank_account;
use App\Models\bank_account_payouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class settlementaccountController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
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
        return view('settlementaccount/create',compact('merchants','bankaccounts'));
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
        $settlement->save();

        return redirect('settlementaccount/index')->with('success', 'settlement Added Successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }


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
        $settlement = settlement::findorFail($id);
        $settlement->delete();

        return redirect('settlement/index')->with('success', 'Payout Deleted Successfully');  
    }

 
}