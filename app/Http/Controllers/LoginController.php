<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(){
        session()->flush();
        return redirect('/')->with('success','You have logout successfully');
    }

    public function login(Request $request){
        $confidential=$request->only('email','password');
        try {
            if (Auth::attempt($confidential)) {
                $user = Auth()->user();
                return redirect('admin/dashboard')->with('success', 'Welcome ' . $user->name);
            } else {
                return back()->with('error', 'Incorrect email or password!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}