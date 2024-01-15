<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\Education;
use App\Models\Localization;
use Illuminate\Support\Facades\DB;
use App\Models\UserContact;
use App\Models\WorkExperience;

class ProfileController extends Controller
{
    public function profile()
    {
       $lang= Localization::where('user_id', auth()->user()->id)->first();
        return view('admin.profile.profile', compact('lang'));
    }


}
