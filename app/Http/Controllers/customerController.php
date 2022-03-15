<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_account;
use App\Models\customer;
use App\Models\merchant;
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
        $merchants = merchant::all();
        
       
        return view('customer/create', compact('merchants'));
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

        $customer->merchant_fk_id=$request->merchant_fk_id;


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
            
            $bankaccountpayouts->save();
        }



        $addmorecount = count($request->currency);

        for($i=0;$i<$addmorecount;$i++)
        {
            $customerdocuments = new customer_documents();
            $customerdocuments->customer_fk_id = $customerid;

            $customerdocuments->document_type = $request->document_type[$i];

            $file = $request->upload_file[$i];
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

            
            $customerdocuments->save();
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
        $customer = customer::findorFail($id);
        $merchants = merchant::all();
        // ->join('bank_accounts', 'bank_accounts.bank_id','=','banks.id')
        // ->get();
        // dd($bank);
        $bankaccountpayouts = bank_account_payouts::where('customer_fk_id',$id)->get();
        $customerdocuments = customer_documents::where('customer_fk_id',$id)->get();
        return view('customer/edit', compact('customer','bankaccountpayouts','customerdocuments','merchants'));
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
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->country = $request->country;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->id_number = $request->id_number;

        $customer->merchant_fk_id=$request->merchant_fk_id;

        $customer->update();



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
