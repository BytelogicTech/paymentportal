<?php

namespace App\Http\Controllers;

use App\Models\adjustment;
use App\Models\bank_account;
use App\Models\settlement;
use App\Models\payout;
use App\Models\merchant;
use App\Models\customer;
use App\Models\User;
use App\Models\bankaccount;
use App\Models\bank_account_payouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adjustmentController extends Controller
{

    public function index()
    {
        $merchant_fk_id = '';
        $merchants = merchant::all();

        $adjustments = adjustment::all();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $userpluck = User::pluck('first_name', 'id');
        return view('adjustment/index', compact('adjustments', 'merchantpluck', 'userpluck', 'merchants', 'merchant_fk_id'));
    }

    public function search(Request $request)
    {

        $adjustments = adjustment::all();
        $currency = $request->currency;
        $merchant_fk_id = $request->merchant_fk_id;
        // $date_added_from = (date($request->date_added_from));
        // $date_added_to = (date($request->date_added_to));
        $type = $request->type;

        $adjustments = adjustment::query();

        // if ($merchant_fk_id != null) {
        //     $adjustments = adjustment::where('merchant_fk_id', $merchant_fk_id);
        // }

        // if($date_added_from!=null)
        // {
        //     $adjustments = $adjustments->where('created_at','>=',$date_added_from);
        // }
        // if($date_added_to!=null)
        // {
        //     $adjustments = $adjustments->where('created_at','<=',$date_added_to);
        // }

        if($currency!=null)
        {
            $adjustments = $adjustments->where('details','like','%'.$currency.'%');
        }


        if ($type!=null) {
            $adjustments = adjustment::where('type', $type);
        }


        $adjustments = $adjustments->get();
        $merchantpluck = merchant::pluck('merchant_name', 'id');
        $merchants = merchant::all();

        return view('adjustment/index', compact('adjustments', 'merchants', 'merchant_fk_id', 'merchantpluck'));
    }



    public function adjustment_currency_conversion_create()
    {
        $merchants = merchant::all();
        return view('adjustment/adjustment_currency_conversion_create', compact('merchants'));
    }


    public function adjustment_currency_conversion_store(Request $request)
    {
        $details = '' . $request->currency_from . ' ' . $request->amount_from . ' ' . 'converted to' . ' ' . $request->currency_to . ' ' . $request->amount_to;

        $adjustment = new adjustment();
        $adjustment->merchant_fk_id = $request->merchant_fk_id;
        $adjustment->details = $details;
        $adjustment->remarks = $request->remarks;

        $adjustment->type = "Currency Conversion";
        $adjustment->created_by = Auth::user()->id;
        $adjustment->save();
        return redirect('adjustment/index')->with('success', 'bank Added Successfully');
    }




    public function adjustment_tier_commission_create()
    {
        $merchants = merchant::all();
        return view('adjustment/adjustment_tier_commission_create', compact('merchants'));
    }


    public function adjustment_tier_commission_store(Request $request)
    {

        $details = 'Date From: ' . $request->date_from . ' | Date To: ' . $request->date_to . ' | Incoming Percentage ' . $request->incoming_percentage . ' | RR Percentage ' . $request->rr_percentage . ' | Payout Percentage ' . $request->payout_percentage . ' | B2B Percentage ' . $request->b2b_percentage . ' | Remarks: ' . $request->remarks;

        $adjustment = new adjustment();
        $adjustment->merchant_fk_id = $request->merchant_fk_id;
        $adjustment->details = $details;
        $adjustment->remarks = $request->remarks;

        $adjustment->type = "Tier Commission";
        $adjustment->created_by = Auth::user()->id;
        $adjustment->save();
        return redirect('adjustment/index')->with('success', 'bank Added Successfully');
    }

    public function other_adjustments_create()
    {
        $merchants = merchant::all();
        return view('adjustment/other_adjustments_create', compact('merchants'));
    }


    public function other_adjustments_store(Request $request)
    {

        $details = $request->currency . ' ' . $request->amount . ' ( ' . $request->adjustment_type . ' ) Remarks: ' . $request->remarks;

        $adjustment = new adjustment();
        $adjustment->merchant_fk_id = $request->merchant_fk_id;
        $adjustment->details = $details;
        $adjustment->remarks = $request->remarks;

        $adjustment->type = "RR Adjustment";

        $adjustment->created_by = Auth::user()->id;
        $adjustment->save();
        return redirect('adjustment/index')->with('success', 'bank Added Successfully');
    }


    public function destroy($id)
    {
        $adjustment = adjustment::findorFail($id);
        $adjustment->delete();

        return redirect('adjustment/index')->with('success', 'Adjustment Deleted Successfully');
    }

    public function adjustmentupdate(Request $request)
    {
        //dd("hello");
        $adjustment = adjustment::findorFail($request->adjustmentid);
        $adjustment->remarks = $request->remarks;

        $adjustment->save();

        return back();
    }
}
