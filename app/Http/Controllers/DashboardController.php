<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $id=Session()->get('id');
        $user = User::with('media')->where('id', $id)->first();

        return view('admin/dashboard',compact('user'));
    }
}
