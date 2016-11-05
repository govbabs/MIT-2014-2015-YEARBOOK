<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Auth;

use App\Http\Requests;

class AccountController extends Controller{
    protected $authUser;

    public function __construct(){
        $this->authUser = Auth::user();
    }

    /**
     * Show the form for editing the specified user profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        return view('account.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $niceNames = array(
            'username' => 'Username',
            'email'     => 'Email',
            'password' => 'New Password',
        );

        $this->validate($request, [
            'username'  => 'required',
            'email'     => 'required|email',
        ], [], $niceNames);

        $user = User::findOrFail($this->authUser->user_id);

        if($request->has('password')){
            $this->validate($request, [
                'password' => 'required|min:6|confirmed'
            ], [], $niceNames);
            $user->password = bcrypt($request->input('password'));
        }

        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->push();

        return redirect()->back()->with('status', 'Account Updated successfully');
    }
}
