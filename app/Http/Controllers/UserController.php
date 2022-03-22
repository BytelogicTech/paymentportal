<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        $merchantpluck = merchant::pluck('merchant_name','id');

        return view('user/index', compact('users','merchantpluck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       $users = User::all();
       $merchants = merchant::all();
        return view('user/create',compact('users','merchants') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->merchant_fk_id = $request->merchant_fk_id;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->remember_token = $request->remember_token;
        $user->save();
        return redirect('user/index')->with('message','User Added Successfully');
   
    }


    public function edit($id)
    {
        $user = User::findorFail($id);
        $merchants = merchant::all();
        return view('user/edit', compact('user','merchants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $user = user::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->merchant_fk_id = $request->merchant_fk_id;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;

        if($request->password)
        {
            $user->password = Hash::make($request->password);
        }
      
        
        $user->role = $request->role;
        $user->remember_token = $request->remember_token;
        // $user->save();
        return redirect('user/index')->with('message','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();

        return redirect('user/index')->with('success','User Deleted Successfully');
    }
}










