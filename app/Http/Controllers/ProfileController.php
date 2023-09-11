<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('admin/profile');
    }

    public function store(Request $request) {

        $request->validate([
                'name'=>'required',
        ]);

        try{
            $user_id = $request->user_id;
            $profile = User::find($user_id);
            $profile->name = $request->name;

            if ($request->profile_image) {
                $profile->clearMediaCollection('profile_image');
                $profile->addMedia($request->profile_image)->toMediaCollection('profile_image');
            }

            $profile->save();
            return back()->with('success', 'Profile updated successfully');
        }
        catch(\Exception $e){
            return back()->with('fail', $e->getMessage());


        }



    }
}
