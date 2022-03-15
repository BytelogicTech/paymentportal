<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_account;
use App\Models\customer;
use App\Models\bank_account_payouts;
use App\Models\customer_documents;
// use App\Models\customer_account;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::all();
        // dd($customers);
        return view('customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $bankaccounts = bank_account::groupBy('bank_account.banks_id')->get();

       
        return view('customer/create');
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
        $customer = new customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->country = $request->country;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->id_number = $request->id_number;
        
        $customer->save();  
        $customerid = $customer->id;

        $customer->parent_merchant = $request->parent_merchant;
        if($request->status=='on')
        {
            $customer->status = 1;
        }
        else
        {
            $customer->status=0;
        }
        
       
        
        $addmorecount = count($request->currency);
        
        for($i=0;$i<$addmorecount;$i++)
        {
            $bankaccountpayouts = new bank_account_payouts();
            $bankaccountpayouts->customer_fk_id = $customerid;
            $bankaccountpayouts->beneficiary_name = $request->beneficiary_name[$i];
            $bankaccountpayouts->beneficiary_nickname = $request->beneficiary_nickname[$i];
            $bankaccountpayouts->beneficiary_address = $request->beneficiary_address[$i];
            $bankaccountpayouts->beneficiary_country = $request->beneficiary_country[$i];
            $bankaccountpayouts->bank_name = $request->bank_name[$i];
            $bankaccountpayouts->bank_branch = $request->bank_branch[$i];
            $bankaccountpayouts->bank_address = $request->bank_address[$i];
            $bankaccountpayouts->bank_country = $request->bank_country[$i];
            $bankaccountpayouts->bank_swift = $request->bank_swift[$i];
            $bankaccountpayouts->account_number = $request->account_number[$i];
            $bankaccountpayouts->currency = $request->currency[$i];
            $bankaccountpayouts->remarks = $request->remarks[$i];
            $bankaccountpayouts->intermediary_bank_name = $request->intermediary_bank_name[$i];
            $bankaccountpayouts->intermediary_bank_address = $request->intermediary_bank_address[$i];
            $bankaccountpayouts->intermediary_bank_swift = $request->intermediary_bank_swift[$i];
            $bankaccountpayouts->intermediary_bank_details_remarks = $request->intermediary_bank_details_remarks[$i];
            $bankaccountpayouts->document_type = $request->document_type[$i];

            $file = $request->upload_file[$i];
        //dd($file);
        if ($request->upload_file) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;

                $file->move('images/', $filename);
                $customer->upload_file = $filename;
            } else {
                return back()->with('error', 'Please Upload File');
            }
        }
            
            $bankaccountpayouts->save();
        }

        return redirect('customer/index')->with('success', 'customer Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bankaccounts = bank_account::join('banks','banks.id','=','bank_accounts.bank_id','left outer')->get();

        $customer = customer::findorFail($id);
        // ->join('customer_accounts', 'customer_accounts.customer_id','=','customers.id')
        // ->get();
        // dd($customer);
        
        return view('customer/edit', compact('customer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $customer = customer::findorFail($request->id);
        $customer->customer_name = $request->customer_name;
        $customer->bank_account_id = $request->bank_account_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->Country = $request->Country;
        $customer->secondary_email = $request->secondary_email;
        $customer->invoice_email = $request->invoice_email;
        $customer->payout_notification_email = $request->payout_notification_email;
        $customer->settlement_notification_email = $request->settlement_notification_email;
        $customer->payout_notification_email_admin = $request->payout_notification_email_admin;
        $customer->settlement_notification_email_admin = $request->settlement_notification_email_admin;
        $customer->incoming_percentage = $request->incoming_percentage;
        $customer->payout_percentage = $request->payout_percentage;
        $customer->alternate_payout_commission = $request->alternate_payout_commission;
        $customer->b2b_percentage = $request->b2b_percentage;
        $customer->rolling_reserve_percentage = $request->rolling_reserve_percentage;
        $customer->rolling_reserve_release_days = $request->rolling_reserve_release_days;
        $customer->website = $request->website;
        $customer->customer_support_number = $request->customer_support_number;
        $customer->invoice_remarks = $request->invoice_remarks;
        $customer->enable_mail_for_customers = $request->enable_mail_for_customers;
        $customer->company_details_on_left = $request->company_details_on_left;
        $customer->invoice_details_on_right = $request->invoice_details_on_right;
        $customer->b2b_access = $request->b2b_access;
        $customer->status = $request->status;

        $customer->save();



        return redirect('customer/index')->with('success', 'customer Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::findorFail($id);
        $customer->delete();

        return redirect('customer/index')->with('success', 'customer Deleted Successfully');
    }
}