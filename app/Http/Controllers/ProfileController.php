<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bio;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(){
        return view('admin/profile');
    }

    public function store(Request $request) {

        $request->validate([
                'name'=>['required'],
                'bio'=>['required'],
                'profession'=>['required'],
                'dob'=>['required'],
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

            $bio=new Bio();
            $bio->profession=$request->profession;
            $bio->dob=$request->dob;
            $bio->profession=$request->profession;
            $bio->bio=$request->bio;
            $bio->user_id=$request->user_id;
            $bio->save();

            return back()->with('success', 'Profile updated successfully');
        }
        catch(\Exception $e){
            return back()->with('fail', $e->getMessage());

        }



    }
}
