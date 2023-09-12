<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AccountSettingController extends Controller
{
    public function accountsetting(){
        $id=Session()->get('id');
        $biodata=DB::table('users')->leftjoin('bios','bios.user_id','=','users.id')
        ->select('users.name','bios.bio','bios.profession','bios.dob','users.id')->
        where('id',$id)->get(); 

        $count=$biodata->count();
        return view('admin/accountsetting',compact('biodata','count'));
    }
}
