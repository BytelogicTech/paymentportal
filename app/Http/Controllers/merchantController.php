<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_account;
use App\Models\merchant;
use App\Models\User;
// use App\Models\merchant_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class merchantController extends Controller
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
        $merchants = merchant::all();
        $userpluck = User::pluck('first_name','id');

        
        return view('merchant/index', compact('merchants','userpluck'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id'); 
        
        // dd($bankaccounts);
        return view('merchant/create',compact('bankaccounts'));
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
        $merchant = new merchant();
        $merchant->merchant_name = $request->merchant_name;
        $merchant->bank_account_id = $request->bank_account_id;
        $merchant->first_name = $request->first_name;
        $merchant->last_name = $request->last_name;
        $merchant->email = $request->email;
        $merchant->Country = $request->Country;
        $merchant->secondary_email = $request->secondary_email;
        $merchant->invoice_email = $request->invoice_email;
        $merchant->payout_notification_email = $request->payout_notification_email;
        $merchant->settlement_notification_email = $request->settlement_notification_email;
        $merchant->payout_notification_email_admin = $request->payout_notification_email_admin;
        $merchant->settlement_notification_email_admin = $request->settlement_notification_email_admin;
        $merchant->incoming_percentage = $request->incoming_percentage;
        $merchant->payout_percentage = $request->payout_percentage;
        $merchant->alternate_payout_commission = $request->alternate_payout_commission;
        $merchant->b2b_percentage = $request->b2b_percentage;
        $merchant->rolling_reserve_percentage = $request->rolling_reserve_percentage;
        $merchant->rolling_reserve_release_days = $request->rolling_reserve_release_days;
        $merchant->website = $request->website;
        $merchant->customer_support_number = $request->customer_support_number;
        $merchant->invoice_remarks = $request->invoice_remarks;
        if($request->enable_mail_for_customers=='on')
        {
            $merchant->enable_mail_for_customers = 1;
        }
        else
        {
            $merchant->enable_mail_for_customers=0;
        }
        //$merchant->enable_mail_for_customers = $request->enable_mail_for_customers;
        if($request->company_details_on_left=='on')
        {
            $merchant->company_details_on_left = 1;
        }
        else
        {
            $merchant->company_details_on_left=0;
        }
        //$merchant->company_details_on_left = $request->company_details_on_left;
        if($request->invoice_details_on_right=='on')
        {
            $merchant->invoice_details_on_right=1;
        }
        else
        {
            $merchant->invoice_details_on_right=0;
        }
        //$merchant->invoice_details_on_right = $request->invoice_details_on_right;
        if($request->b2b_access=='on')
        {
            $merchant->b2b_access='1';
        }
        else
        {
             $merchant->b2b_access='0';
        }

        //$merchant->b2b_access = $request->b2b_access;

        if($request->status=='on')
        {
            $merchant->status = 1;
        }
        else
        {
            $merchant->status=0;
        }
        
        // $merchant->status = 1;
        $file = $request->upload_logo;
        // dd($file);
        if ($request->upload_logo) {

            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;
                $file->move('images/', $filename);
                $merchant->upload_logo = $filename;
            } else {
                return back()->with('error', 'Please upload Logo');
            }
        }

        $merchant->created_by = Auth::user()->id;

        $merchant->save();  

       


        return redirect('merchant/index')->with('success', 'merchant Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(merchant $merchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bankaccounts = bank_account::join('banks','banks.id','=','bank_accounts.bank_id','left outer')->get();

        $merchant = merchant::findorFail($id);
        // ->join('merchant_accounts', 'merchant_accounts.merchant_id','=','merchants.id')
        // ->get();
        // dd($merchant);
        
        return view('merchant/edit', compact('merchant','bankaccounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $merchant = merchant::findorFail($request->id);
        $merchant->merchant_name = $request->merchant_name;
        $merchant->bank_account_id = $request->bank_account_id;
        $merchant->first_name = $request->first_name;
        $merchant->last_name = $request->last_name;
        $merchant->email = $request->email;
        $merchant->Country = $request->Country;
        $merchant->secondary_email = $request->secondary_email;
        $merchant->invoice_email = $request->invoice_email;
        $merchant->payout_notification_email = $request->payout_notification_email;
        $merchant->settlement_notification_email = $request->settlement_notification_email;
        $merchant->payout_notification_email_admin = $request->payout_notification_email_admin;
        $merchant->settlement_notification_email_admin = $request->settlement_notification_email_admin;
        $merchant->incoming_percentage = $request->incoming_percentage;
        $merchant->payout_percentage = $request->payout_percentage;
        $merchant->alternate_payout_commission = $request->alternate_payout_commission;
        $merchant->b2b_percentage = $request->b2b_percentage;
        $merchant->rolling_reserve_percentage = $request->rolling_reserve_percentage;
        $merchant->rolling_reserve_release_days = $request->rolling_reserve_release_days;
        $merchant->website = $request->website;
        $merchant->customer_support_number = $request->customer_support_number;
        $merchant->invoice_remarks = $request->invoice_remarks;
        if($request->enable_mail_for_customers=='on')
        {
            $merchant->enable_mail_for_customers = 1;
        }
        else
        {
            $merchant->enable_mail_for_customers=0;
        }
        //$merchant->enable_mail_for_customers = $request->enable_mail_for_customers;
        if($request->company_details_on_left=='on')
        {
            $merchant->company_details_on_left = 1;
        }
        else
        {
            $merchant->company_details_on_left=0;
        }
        //$merchant->company_details_on_left = $request->company_details_on_left;
        if($request->invoice_details_on_right=='on')
        {
            $merchant->invoice_details_on_right=1;
        }
        else
        {
            $merchant->invoice_details_on_right=0;
        }
        //$merchant->invoice_details_on_right = $request->invoice_details_on_right;
        if($request->b2b_access=='on')
        {
            $merchant->b2b_access='1';
        }
        else
        {
             $merchant->b2b_access='0';
        }

        //$merchant->b2b_access = $request->b2b_access;

        if($request->status=='on')
        {
            $merchant->status = 1;
        }
        else
        {
            $merchant->status=0;
        }
        

        // $merchant->status = 1;
        $file = $request->upload_logo;
        // dd($file);
        if ($request->upload_logo) {

            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;
                $file->move('images/', $filename);
                $merchant->upload_logo = $filename;
            } else {
                return back()->with('error', 'Please upload Logo');
            }
        }

        $merchant->save();



        return redirect('merchant/index')->with('success', 'merchant Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merchant = merchant::findorFail($id);
        $merchant->delete();

        return redirect('merchant/index')->with('success', 'merchant Deleted Successfully');
    }
}
