<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\bank_account;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = bank::all();
        // dd($banks);
        return view('bank/index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank/create');
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
        $bank = new bank();
        $bank->beneficiary_name = $request->beneficiary_name;
        $bank->beneficiary_address = $request->beneficiary_address;
        $bank->bank_nickname = $request->bank_nickname;
        $bank->bank_name = $request->bank_name;
        $bank->bank_address = $request->bank_address;
        $bank->zip_code = $request->zip_code;
        $bank->country = $request->country;
        $bank->swift_code = $request->swift_code;
        $bank->remarks = $request->remarks;
        $bank->company_name = $request->company_name;
        $bank->company_email = $request->company_email;
        $bank->prefix = $request->prefix;
        $bank->declaration_content = $request->declaration_content;
        $bank->instructions_title = $request->instructions_title;
        $bank->instructions_content = $request->instructions_content;
        if($request->status=='on')
        {
            $bank->status = 1;
        }
        else
        {
            $bank->status=0;
        }
        
        $file = $request->logo;
        // dd($file);
        if ($request->logo) {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;

                $file->move('images/', $filename);
                $bank->logo = $filename;
            } else {
                return back()->with('error', 'Please upload Logo');
            }
        }

        $bank->save();

        $bankid = $bank->id;

        $addmorecount = count($request->currency);

        for($i=0;$i<$addmorecount;$i++)
        {
            $bankaccount = new bank_account();
            $bankaccount->bank_id = $bankid;
            $bankaccount->currency = $request->currency[$i];
            $bankaccount->account_number = $request->account_number[$i];
            $bankaccount->nick_name = $request->nickname[$i];
            $bankaccount->bank_charges = $request->bank_charges[$i];
            $bankaccount->save();
        }
        

        

        return redirect('bank/index')->with('success', 'bank Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = bank::findorFail($id);
        // ->join('bank_accounts', 'bank_accounts.bank_id','=','banks.id')
        // ->get();
        // dd($bank);
        $bankaccounts = bank_account::where('bank_id',$id)->get();
        return view('bank/edit', compact('bank','bankaccounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $bank = bank::findorFail($request->id);
        $bank->beneficiary_name = $request->beneficiary_name;
        $bank->beneficiary_address = $request->beneficiary_address;
        $bank->bank_nickname = $request->bank_nickname;
        $bank->bank_name = $request->bank_name;
        $bank->bank_address = $request->bank_address;
        $bank->zip_code = $request->zip_code;
        $bank->country = $request->country;
        $bank->swift_code = $request->swift_code;
        $bank->remarks = $request->remarks;
        $bank->company_name = $request->company_name;
        $bank->company_email = $request->company_email;
        $bank->prefix = $request->prefix;
        $bank->declaration_content = $request->declaration_content;
        $bank->instructions_title = $request->instructions_title;
        $bank->instructions_content = $request->instructions_content;
        $bank->status = $request->status;
        // $bank->status = 1;
        $file = $request->logo;
        // dd($file);
        if ($request->logo) {

            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
                $filename = time() . "." . $fileext;
                $file->move('images/', $filename);
                $bank->logo = $filename;
            } else {
                return back()->with('error', 'Please upload Logo');
            }
        }

        $bank->update();

        // $bankid = $bank->id;

        // $bankaccount = new bank_account();
        // $bankaccount->bank_id = $bankid;
        // $bankaccount->currency = $request->currency;
        // $bankaccount->account_number = $request->account_number;
        // $bankaccount->nick_name = $request->nickname;
        // $bankaccount->save();

        return redirect('bank/index')->with('success', 'bank Added Successfully');
    }

    public function bankaccountupdate(Request $request)
    {
        //dd("hello");
        $bankaccount = bank_account::findorFail($request->bankaccountid);
        $bankaccount->currency=$request->currency;
        $bankaccount->account_number=$request->account_number;
        $bankaccount->nick_name=$request->nick_name;
        $bankaccount->bank_charges=$request->bank_charges;

        $bankaccount->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = bank::findorFail($id);
        $bank->delete();

        return redirect('bank/index')->with('success', 'Bank Deleted Successfully');
    }
}
