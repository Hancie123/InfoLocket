<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function accountsetting(){
        return view('admin/accountsetting');
    }
}
