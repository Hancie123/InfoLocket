<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        
        $lang=Localization::where('user_id',auth()->user()->id)->first();

        return view('admin/dashboard',compact('lang'));
    }
}