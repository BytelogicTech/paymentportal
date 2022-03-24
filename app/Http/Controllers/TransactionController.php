<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_account;
use App\Models\customer;
use App\Models\merchant;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $transactions = transaction::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $customerpluck = customer::pluck('first_name', 'id');
        $bankaccountpluk = bank_account::pluck('currency', 'id');
        return view('transaction/index', compact('transactions', 'merchantpluck', 'customerpluck', 'bankaccountpluk'));

        // $students = student::all();
        // $schoolpluck = school::pluck('school_name','id');
        // // dd($students);
        // return view('student/index',compact('students','schoolpluck'));

        // <td>{{@$schoolpluck[$student->school_fk_id]}}</td>
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
}
