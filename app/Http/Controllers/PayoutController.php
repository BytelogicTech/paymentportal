<?php

namespace App\Http\Controllers;

use App\Models\payout;
use App\Models\merchant;
use App\Models\customer;
use App\Models\User;
use App\Models\bankaccount;
use App\Models\bank_account;
use App\Models\bank_account_payouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Json;

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
        $merchants = merchant::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        $userpluck = User::pluck('first_name', 'id');

        return view('payout/index', compact('payouts','merchants','merchantpluck','customerpluck','bankaccountpluk','userpluck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payouts = payout::all();
        $merchants = merchant::all();        
        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id');

        // dd($bankaccounts);

        return view('payout/create', compact('payouts','merchants','bankaccounts'));
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
        $payout = new payout();
        $payout->id = $request->id;
        $payout->merchant_fk_id = $request->merchant_fk_id;
        $payout->customer_fk_id = $request->customer_fk_id;
        $payout->bank_account_to_fk_id = $request->bank_account_to_fk_id;
        $payout->payout_amount = $request->payout_amount;
        $payout->remarks = $request->remarks;
        $payout->reference_id = $request->reference_id;
        $file = $request->upload_invoice;
        if ($request->upload_invoice) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png" || $fileext == "pdf" || $fileext == "doc" || $fileext == "docx" || $fileext == "jpeg") {
                $filename = time() . "." . $fileext;

                $file->move('public/invoice/', $filename);
                $payout->upload_invoice = $filename;
            } else {
                return back()->with('error', 'Please upload File');
            }
        }
        $file_reciept = $request->upload_reciept;
        if ($request->upload_reciept) {
            $fileext_proof = $file_reciept->getClientOriginalExtension();
            if ($fileext_proof == "jpg" || $fileext_proof == "jpeg" || $fileext_proof == "png" || $fileext_proof == "pdf" || $fileext_proof == "doc" || $fileext_proof == "docx" || $fileext_proof == "jpeg") {
                $filename_proof = time() . "." . $fileext_proof;

                $file_reciept->move('public/pop/', $filename_proof);
                $payout->upload_reciept = $filename_proof;
            } else {
                return back()->with('error', 'Please upload File');
            }
        }
        $payout->bank_account_from_fk_id = $request->bank_account_from_fk_id;
        $payout->status_of_payout = $request->status_of_payout;
        $payout->created_by = Auth::user()->id;
        $payout->save();
        $payoutid = $payout->id;
        return redirect('payout/index')->with('success', 'Payout Added Successfully');
    
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
    public function edit($id)
    {
        $payout = payout::findorFail($id);
        $bank_account_to_fk_id = payout::find($id)->bank_account_to_fk_id;
        $customer_fk_id = bank_account_payouts::find($bank_account_to_fk_id)->customer_fk_id;
        $bank_account_payouts = bank_account_payouts::where('customer_fk_id',$customer_fk_id)->get();
        
        $merchants = merchant::all();
        $customers = customer::all();
        $bankaccounts = bank_account::all();
        $bankaccounts =  DB::table('bank_accounts')
            ->join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('bank_accounts.id as bank_accountsid', 'bank_accounts.bank_id', 'banks.bank_name', 'banks.beneficiary_name', 'bank_accounts.currency', 'bank_accounts.account_number', 'bank_accounts.nick_name')
            ->get()
            ->groupBy('bank_id');
        $customers = customer::all();
        // dd($payout);
        return view('payout/edit', compact('payout','merchants','customers','bankaccounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $payout = new payout();
        $payout = payout::findorFail($request->id);
        $payout->id = $request->id;
        $payout->merchant_fk_id = $request->merchant_fk_id;
        $payout->customer_fk_id = $request->customer_fk_id;
        $payout->bank_account_to_fk_id = $request->bank_account_to_fk_id;
        $payout->payout_amount = $request->payout_amount;
        $payout->remarks = $request->remarks;
        $payout->reference_id = $request->reference_id;
        $file = $request->upload_invoice;
        if ($request->upload_invoice) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png" || $fileext == "pdf" || $fileext == "doc" || $fileext == "docx" || $fileext == "jpeg") {
                $filename = time() . "." . $fileext;

                $file->move('public/invoice/', $filename);
                $payout->upload_invoice = $filename;
            } else {
                return back()->with('error', 'Please upload File');
            }
        }
        $file_reciept = $request->upload_reciept;
        if ($request->upload_reciept) {
            $fileext_proof = $file_reciept->getClientOriginalExtension();
            if ($fileext_proof == "jpg" || $fileext_proof == "jpeg" || $fileext_proof == "png" || $fileext_proof == "pdf" || $fileext_proof == "doc" || $fileext_proof == "docx" || $fileext_proof == "jpeg") {
                $filename_proof = time() . "." . $fileext_proof;

                $file_reciept->move('public/pop/', $filename_proof);
                $payout->upload_reciept = $filename_proof;
            } else {
                return back()->with('error', 'Please upload File');
            }
        }
        $payout->bank_account_from_fk_id = $request->bank_account_from_fk_id;
        $payout->status_of_payout = $request->status_of_payout;
        $payout->created_by = Auth::user()->id;
        $payout->save();
        $payoutid = $payout->id;
        return redirect('payout/index')->with('success', 'Payout Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payout = payout::findorFail($id);
        $payout->delete();

        return redirect('payout/index')->with('success', 'Payout Deleted Successfully');  
    }

    public function getcustomers_bymerchant(Request $request)
    {
        $merchant_fk_id = $request->merchant_fk_id;

        $customers = customer::where('merchant_fk_id',$merchant_fk_id)->get();

        return $customers;

    }
    public function getpayout_bycustomer(Request $request)
    {
        $customer_fk_id = $request->customer_fk_id;
    
        $bank_account_payouts = bank_account_payouts::where('customer_fk_id',$customer_fk_id)->get();

        return $bank_account_payouts;

    }
}
