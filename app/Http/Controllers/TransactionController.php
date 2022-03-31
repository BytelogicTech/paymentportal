<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\User;
use App\Models\bank_account;
use App\Models\bank_account_payouts;
use App\Models\customer;
use App\Models\merchant;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class TransactionController extends Controller
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
        $transactions = transaction::all();
        $merchant_fk_id = "";
        $customer_fk_id = "";
        $bank_account_fk_id = "";
        $status_of_transaction = "";
        $type_of_transaction = "";
        $currency ="";
        $bank_account_fk_id = "";
        $transaction_amount_from = "";
        $transaction_amount_to = "";
        $merchants = merchant::all();
        $customers = customer::all();
        $bankaccounts = bank_account::all();
        $bank_account_payouts = bank_account_payouts::all();
        $transactions = transaction::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        $userpluck = User::pluck('first_name', 'id');

        

        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id');

        return view('transaction/index', compact('transactions', 'merchantpluck', 'customerpluck', 'bankaccountpluk','userpluck','merchants','customers','merchant_fk_id','customer_fk_id','bankaccounts','bank_account_payouts','status_of_transaction','type_of_transaction','currency','bank_account_fk_id','transaction_amount_from','transaction_amount_to'));

        
    }

     
    public function search(Request $request)
    {
        // dd($request->all());
        $status_of_transaction = $request->status_of_transaction;
        $type_of_transaction = $request->type_of_transaction;
        $merchant_fk_id = $request->merchant_fk_id;
        $customer_fk_id = $request->customer_fk_id;
        $bank_account_fk_id = $request->bank_account_fk_id;
        $currency = $request->currency;
        $transaction_amount_from= (int)$request->transaction_amount_from;
        $transaction_amount_to= (int)$request->transaction_amount_to;
        $date_paid_from= (date($request->date_paid_from));
        $date_paid_to= (date($request->date_paid_to));
        

        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        $userpluck = User::pluck('first_name', 'id');
        $bank_account_payouts = bank_account_payouts::all();
        $bank_accounts = bank_account::all();


        $transactions = transaction::query();
       
        if($merchant_fk_id!=null)
        {
            $transactions = $transactions->where('merchant_fk_id',$merchant_fk_id);
        }

        if($request->invoice_number!=null)
        {
            $transactions = $transactions->where('invoice_number',$request->invoice_number);
        }

        if($customer_fk_id!=null)
        {
            $transactions = $transactions->where('customer_fk_id',$customer_fk_id);
        }

        if($bank_account_fk_id!=null)
        {
            $transactions = $transactions->where('bank_account_fk_id',$bank_account_fk_id);
        }

        if($transaction_amount_from!=0)
        {
            $transactions = $transactions->where('product_price','>=',$transaction_amount_from);
        }
        if($transaction_amount_to!=0)
        {
            $transactions = $transactions->where('product_price','<=',$transaction_amount_to);
        }

        if($date_paid_from!=null)
        {
            $transactions = $transactions->where('date_recieved','>=',$date_paid_from);
        }
        if($date_paid_to!=null)
        {
            $transactions = $transactions->where('date_recieved','<=',$date_paid_to);
        }


        if($status_of_transaction!=null)
        {
            $transactions = $transactions->where('status_of_transaction',$status_of_transaction);
        }

        if($type_of_transaction!=null)
        {
            $transactions = $transactions->where('type_of_transaction',$type_of_transaction);
        }

        if($currency!=null)
        {
            // dd('hello curency');
            $transactions = $transactions->join('bank_accounts', 'bank_accounts.id','=', 'transactions.bank_account_fk_id')
            ->where('currency',$currency);
        }
        
        $transactions = $transactions->get();
        
        
        $bankaccounts = bank_account::all();
        $customers = customer::all();
        $merchants = merchant::all();
        $bank_account_payouts = bank_account_payouts::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        $userpluck = User::pluck('first_name', 'id');
        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id');
            
        return view('transaction/index', compact('transactions', 'merchantpluck', 'customerpluck', 'bankaccountpluk','userpluck','customers','merchants','bankaccounts','bank_account_payouts','merchant_fk_id','status_of_transaction','type_of_transaction','currency','bank_account_fk_id','transaction_amount_from','transaction_amount_to'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $merchants = merchant::where('status', 1)->get();
        $bankaccounts =  DB::table('bank_accounts')
            ->join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('bank_accounts.id as bank_accountsid', 'bank_accounts.bank_id', 'banks.bank_name', 'banks.beneficiary_name', 'bank_accounts.currency', 'bank_accounts.account_number', 'bank_accounts.nick_name')
            ->get()
            ->groupBy('bank_id');
        $customers = customer::all();
        return view('transaction/create', compact('merchants', 'bankaccounts', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $maxtranid = transaction::max('id');
        $invoice_number = "tran" . date("y") . date("m") . $maxtranid + 1;
        // dd($invoice_number);

        $transaction = new transaction();
        $transaction->id = $request->id;
        $transaction->invoice_date = $request->invoice_date;
        $transaction->invoice_number = $invoice_number;
        $transaction->merchant_fk_id = $request->merchant_fk_id;
        $transaction->bank_account_fk_id = $request->bank_account_fk_id;
        $transaction->customer_fk_id = $request->customer_fk_id;
        $transaction->product_name = $request->product_name;
        $transaction->product_price = $request->product_price;
        $transaction->remarks = $request->remarks;
        $transaction->reference_id = $request->reference_id;

        $file = $request->upload_signed_invoice;
        if ($request->upload_signed_invoice) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png" || $fileext == "pdf" || $fileext == "doc" || $fileext == "docx" || $fileext == "jpeg") {
                $filename = time() . "." . $fileext;

                $file->move('public/invoice/', $filename);
                $transaction->upload_signed_invoice = $filename;
            } else {
                return back()->with('error', 'Please upload File');
            }
            
        }
        $transaction->date_recieved = $request->date_recieved;
            $transaction->amount_recieved = $request->amount_recieved;
            $transaction->status_of_transaction = $request->status_of_transaction;
            $transaction->type_of_transaction = $request->type_of_transaction;
            $transaction->created_by = Auth::user()->id;

            $transaction->save();

            return redirect('transaction/index')->with('success', 'transaction Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
        $merchants = merchant::where('status', 1)->get();
        $bankaccounts =  DB::table('bank_accounts')
            ->join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('bank_accounts.id as bank_accountsid', 'bank_accounts.bank_id', 'banks.bank_name', 'banks.beneficiary_name', 'bank_accounts.currency', 'bank_accounts.account_number', 'bank_accounts.nick_name')
            ->get()
            ->groupBy('bank_id');
        $customers = customer::all();
        $transaction = transaction::find($id);
        $bankpluck = bank::pluck('beneficiary_name','id');
        
        return view('transaction/edit', compact('transaction','merchants','bankaccounts','customers','bankpluck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $maxtranid = transaction::max('id');
        $invoice_number = "tran" . date("y") . date("m") . $maxtranid + 1;
        //  dd($request->all());
        $transaction = transaction::findorFail($request->id);
        $transaction->id = $request->id;
        $transaction->invoice_date = $request->invoice_date;
        $transaction->invoice_number = $invoice_number;
        $transaction->merchant_fk_id = $request->merchant_fk_id;
        $transaction->bank_account_fk_id = $request->bank_account_fk_id;
        $transaction->customer_fk_id = $request->customer_fk_id;
        $transaction->product_name = $request->product_name;
        $transaction->product_price = $request->product_price;
        $transaction->remarks = $request->remarks;
        $transaction->reference_id = $request->reference_id;
        $file = $request->upload_signed_invoice;
        if ($request->upload_signed_invoice) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png" || $fileext == "pdf" || $fileext == "doc" || $fileext == "docx" || $fileext == "jpeg") {
                $filename = time() . "." . $fileext;

                $file->move('public/invoice/', $filename);
                $transaction->upload_signed_invoice = $filename;
            } else {
                return back()->with('error', 'Please upload File');
            }
            
        }



        $file_proof = $request->proof_of_payment;
        if ($request->proof_of_payment) {
            $fileext_proof = $file_proof->getClientOriginalExtension();
            if ($fileext_proof == "jpg" || $fileext_proof == "jpeg" || $fileext_proof == "png" || $fileext_proof == "pdf" || $fileext_proof == "doc" || $fileext_proof == "docx" || $fileext_proof == "jpeg") {
                $filename_proof = time() . "." . $fileext_proof;

                $file_proof->move('public/pop/', $filename_proof);
                $transaction->proof_of_payment = $filename_proof;
            } else {
                return back()->with('error', 'Please upload File');
            }
            
        }

            $transaction->date_recieved = $request->date_recieved;
            $transaction->amount_recieved = $request->amount_recieved;
            $transaction->status_of_transaction = $request->status_of_transaction;
            $transaction->type_of_transaction = $request->type_of_transaction;
            $transaction->save();

            // dd("hello");

            return redirect()->route('transaction.index')->with('success', 'Transaction Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = transaction::findorFail($id);
        $transaction->delete();

        return redirect('transaction/index')->with('success','Transaction Deleted Successfully');
    }


    public function getcustomers_bymerchant(Request $request)
    {
        $merchant_fk_id = $request->merchant_fk_id;

        $customers = customer::where('merchant_fk_id',$merchant_fk_id)->get();

        return $customers;

    }
}
