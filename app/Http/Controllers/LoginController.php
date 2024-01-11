<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function logout(){
        session()->flush();
        return redirect('/')->with('success','You have logout successfully');
    }

   

    public function login(LoginRequest $request){
        
        $confidential=$request->only('email','password');
        try {
            if (Auth::attempt($confidential)) {
                $user = Auth()->user();
                Session::put('user_id',$user->id);
                return redirect('admin/dashboard')->with('success', 'Welcome ' . $user->name);
            } else {
                return back()->with('error', 'Incorrect email or password!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}