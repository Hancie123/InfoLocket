<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        return view('admin.support.support',compact('lang'));
    }
}