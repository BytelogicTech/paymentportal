<?php

namespace App\Http\Controllers;

use App\Models\settlement;
use App\Models\payout;
use App\Models\merchant;
use App\Models\customer;
use App\Models\User;
use App\Models\logger;
use App\Models\bankaccount;
use App\Models\bank_account;
use App\Models\bank_account_payouts;
use App\Models\settlementaccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class settlementController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settlements = settlement::all();
        $merchant_fk_id = '';


    

        $status_of_settlement = '';
        $bankaccountpayoutpluk = bank_account_payouts::pluck('currency', 'id');
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $bankaccountpayoutbnamepluk = bank_account_payouts::pluck('beneficiary_name', 'id');
        $userpluck = User::pluck('first_name', 'id');
        $merchants = merchant::all();


        // dd($settlements);

        return view('settlement/index', compact('userpluck', 'settlements', 'merchants', 'merchant_fk_id', 'settlements', 'bankaccountpayoutpluk', 'bankaccountpayoutbnamepluk', 'merchantpluck','status_of_settlement'));       return view('settlement/index', compact('userpluck','status_of_settlement','settlements', 'merchants', 'merchant_fk_id', 'settlements', 'bankaccountpayoutpluk', 'bankaccountpayoutbnamepluk', 'merchantpluck'));

    }


    public function search(Request $request)
    {
        

        $settlements = settlement::orderBy('id', 'DESC')->get();

  

        $merchant_fk_id = $request->merchant_fk_id;
        $status_of_settlement = $request->status_of_settlement;

        $settlement_amount_from = (int)$request->settlement_amount_from;
        $settlement_amount_to = (int)$request->settlement_amount_to;

        $date_paid_from = (date($request->date_paid_from));
        $date_paid_to = (date($request->date_paid_to));




        $settlements = settlement::query();
        if ($merchant_fk_id != null) {
            $settlements = settlement::where('merchant_fk_id', $merchant_fk_id);
        }

        if ($settlement_amount_from != 0) {
            $settlements = $settlements->where('settlement_amount', '>=', $settlement_amount_from);
        }
        if ($settlement_amount_to != 0) {
            $settlements = $settlements->where('settlement_amount', '<=', $settlement_amount_to);
        }

        if($date_paid_from!=null)
        {
            $settlements = $settlements->where('date_paid','>=',$date_paid_from);
        }
        if($date_paid_to!=null)
        {
            $settlements = $settlements->where('date_paid','<=',$date_paid_to);
        }

      




        $settlements = $settlements->get();
        $bankaccountpayoutpluk = bank_account_payouts::pluck('currency', 'id');
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $bankaccountpayoutbnamepluk = bank_account_payouts::pluck('beneficiary_name', 'id');
        $userpluck = User::pluck('first_name', 'id');
        $merchants = merchant::all();


        // dd($settlements);

        return view('settlement/index', compact('userpluck', 'merchants', 'settlements', 'merchant_fk_id', 'bankaccountpayoutpluk', 'bankaccountpayoutbnamepluk', 'merchantpluck','status_of_settlement'));

        return view('settlement/index', compact('userpluck','merchants', 'settlements', 'merchant_fk_id', 'bankaccountpayoutpluk', 'bankaccountpayoutbnamepluk', 'merchantpluck'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 

        $merchants = merchant::all();
        $settlementaccounts = settlementaccount::where('merchant_fk_id',Auth::user()->merchant_fk_id)->get();
        // dd($settlementaccounts);
        if(Auth::user()->role=="Admin")
        {
        $bankaccounts =  DB::table('bank_accounts')
        ->join('banks','banks.id','=','bank_accounts.bank_id')
        ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
        ->get()
        ->groupBy('bank_id');
        }
        else
        {
            $parent_self_merchant_id = Auth::user()->merchant_fk_id;
        $bank_accountid = merchant::where('id',$parent_self_merchant_id)->first()->bank_account_id;
            $bankaccounts =  DB::table('bank_accounts')
            ->join('banks','banks.id','=','bank_accounts.bank_id')
            ->select('bank_accounts.id as bank_accountsid','bank_accounts.bank_id','banks.bank_name','banks.beneficiary_name','bank_accounts.currency','bank_accounts.account_number','bank_accounts.nick_name')            
            ->where('bank_accounts.id',$bank_accountid)
            ->get()
            ->groupBy('bank_id');

        }
        return view('settlement/create', compact('merchants', 'bankaccounts','settlementaccounts'));
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

        if ($request->rr_settlement == 'on') {
            $settlement->rr_settlement = 1;
        } else {
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
        $settlement->created_by = Auth::user()->id;
        $settlement->save();

        $settlementid = $settlement->id;

        $logger = new logger();
        $logger->itemid = $settlementid;
        $logger->module = "settlement";
        $logger->action = "add";
        $logger->created_by = Auth::user()->id;
        $logger->save();



        return redirect('settlement/index')->with('success', 'settlement Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settlement = settlement::findorFail($id);
        $bank_account_to_fk_id = settlement::find($id)->bank_account_to_fk_id;
        $customer_fk_id = bank_account_payouts::find($bank_account_to_fk_id)->customer_fk_id;


        $merchants = merchant::all();
        $customers = customer::where('merchant_fk_id', $settlement->merchant_fk_id)->get();
        $bank_account_payouts = bank_account_payouts::where('customer_fk_id', $customer_fk_id)->get();
        $bank_account_payout_existing = bank_account_payouts::findorFail($settlement->bank_account_to_fk_id);
        $bankaccounts = bank_account::all();
        $bankaccounts =  DB::table('bank_accounts')
            ->join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('bank_accounts.id as bank_accountsid', 'bank_accounts.bank_id', 'banks.bank_name', 'banks.beneficiary_name', 'bank_accounts.currency', 'bank_accounts.account_number', 'bank_accounts.nick_name')
            ->get()
            ->groupBy('bank_id');

        // dd($payout);
        return view('settlement/edit', compact('settlement', 'merchants', 'customers', 'bankaccounts', 'bank_account_payouts', 'bank_account_payout_existing'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $settlement = settlement::findorFail($request->id);
        $settlement->id = $request->id;
        $settlement->merchant_fk_id = $request->merchant_fk_id;
        $settlement->bank_account_from_fk_id = $request->bank_account_from_fk_id;
        $settlement->bank_account_to_fk_id = $request->bank_account_to_fk_id;
        $settlement->settlement_amount = $request->settlement_amount;
        $settlement->remarks = $request->remarks;
        $settlement->reference_id = $request->reference_id;
        $settlement->status_of_settlement = $request->status_of_settlement;

        if ($request->rr_settlement == 'on') {
            $settlement->rr_settlement = 1;
        } else {
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
        $settlement->created_by = Auth::user()->id;

        $settlement->save();
        $settlementid = $settlement->id;

        $logger = new logger();
        $logger->itemid = $settlementid;
        $logger->module = "settlement";
        $logger->action = "update";
        $logger->created_by = Auth::user()->id;
        $logger->save();
        return redirect('settlement/index')->with('success', 'Settlement Added Successfully');
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

        $logger = new logger();
        $logger->itemid = $id;
        $logger->module = "settlement";
        $logger->action = "delete";
        $logger->created_by = Auth::user()->id;
        $logger->save();

        return redirect('settlement/index')->with('success', 'Settlement Deleted Successfully');
    }
    public function view($id)
    {
        $settlement = settlement::findorFail($id);
        $bank_account_payout_existing = bank_account_payouts::findorFail($settlement->bank_account_to_fk_id);
        $merchant_existing = merchant::findorFail($settlement->merchant_fk_id);
    

        $bankaccounts = bank_account::all();
       

            $pdf = PDF::loadView('settlement.view', compact('settlement', 'bankaccounts', 'bank_account_payout_existing', 'merchant_existing'));
            return $pdf->download('invoice.pdf');

        // return view('settlement/view', compact('settlement', 'bankaccounts', 'bank_account_payout_existing', 'merchant_existing'));
    }

    // public function downloadpdf($id))
    // {
    //     $pdf = PDF::loadView('settlement.view', $id);
    // return $pdf->download('invoice.pdf');
    // }
}
