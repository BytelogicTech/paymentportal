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
        $settlementaccounts = settlementaccount::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        return view('settlementaccount/index',compact('settlementaccounts','merchantpluck'));

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
        $settlementaccount = new settlementaccount();
        $settlementaccount->id = $request->id;
        $settlementaccount->merchant_fk_id = $request->merchant_fk_id;
        $settlementaccount->beneficiary_name = $request->beneficiary_name;
        $settlementaccount->beneficiary_nickname = $request->beneficiary_nickname;
        $settlementaccount->beneficiary_address = $request->beneficiary_address;
        $settlementaccount->bank_name = $request->bank_name;
        $settlementaccount->bank_branch = $request->bank_branch;
        $settlementaccount->bank_address = $request->bank_address;
        $settlementaccount->bank_country = $request->bank_country;
        $settlementaccount->bank_swift = $request->bank_swift;
        $settlementaccount->account_number = $request->account_number;
        $settlementaccount->currency = $request->currency;
        $settlementaccount->remarks = $request->remarks;
        $settlementaccount->intermediary_bank_name = $request->intermediary_bank_name;
        $settlementaccount->intermediary_bank_address = $request->intermediary_bank_address;
        $settlementaccount->intermediary_bank_swift = $request->intermediary_bank_swift;
        $settlementaccount->intermediary_bank_details_remarks = $request->intermediary_bank_details_remarks;
        $file = $request->upload_bank_statement;
        if ($request->upload_bank_statement) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;

                $file->move('public/images/', $filename);
                $settlementaccount->upload_bank_statement = $filename;
            } else {
                return back()->with('error', 'Please upload Settlement Invoice');
            }
        }

        $settlementaccount->save();

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
        $settlementaccount = settlementaccount::findorFail($id);     
        $merchants = merchant::all();          
        // dd($payout);
        return view('settlementaccount/edit', compact('settlementaccount','merchants'));
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $settlementaccount = settlementaccount::findorFail($request->id);
        $settlementaccount->id = $request->id;
        $settlementaccount->merchant_fk_id = $request->merchant_fk_id;
        $settlementaccount->beneficiary_name = $request->beneficiary_name;
        $settlementaccount->beneficiary_nickname = $request->beneficiary_nickname;
        $settlementaccount->beneficiary_address = $request->beneficiary_address;
        $settlementaccount->bank_name = $request->bank_name;
        $settlementaccount->bank_branch = $request->bank_branch;
        $settlementaccount->bank_address = $request->bank_address;
        $settlementaccount->bank_country = $request->bank_country;
        $settlementaccount->bank_swift = $request->bank_swift;
        $settlementaccount->account_number = $request->account_number;
        $settlementaccount->currency = $request->currency;
        $settlementaccount->remarks = $request->remarks;
        $settlementaccount->intermediary_bank_name = $request->intermediary_bank_name;
        $settlementaccount->intermediary_bank_address = $request->intermediary_bank_address;
        $settlementaccount->intermediary_bank_swift = $request->intermediary_bank_swift;
        $settlementaccount->intermediary_bank_details_remarks = $request->intermediary_bank_details_remarks;
        $file = $request->upload_bank_statement;
        if ($request->upload_bank_statement) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;

                $file->move('public/images/', $filename);
                $settlementaccount->upload_bank_statement = $filename;
            } else {
                return back()->with('error', 'Please upload Settlement Invoice');
            }
        }

        $settlementaccount->save();
        $settlementaccountid = $settlementaccount->id;
        return redirect('settlementaccount/index')->with('success', 'Settlement Account Added Successfully');
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
        $settlementaccount = settlementaccount::findorFail($id);
        $settlementaccount->delete();

        return redirect('settlementaccount/index')->with('success', 'Settlement Account Deleted Successfully');  
    }

 
}