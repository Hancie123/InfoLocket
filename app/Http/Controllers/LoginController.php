<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logout(){
        session()->flush();
        return redirect('/')->with('success','You have logout successfully');
    }
}
