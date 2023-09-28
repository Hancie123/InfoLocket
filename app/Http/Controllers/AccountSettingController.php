<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileResource;
use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\User;
use App\Models\WorkPlatform;
use Illuminate\Support\Facades\DB;

class AccountSettingController extends Controller
{
    public function accountsetting(){
        $id=Session()->get('id');
        $biodata=User::with("media")->join('bios','bios.user_id','=','users.id')
        ->select('bios.bio','bios.profession','bios.dob','users.id','bios.bio_id')->
        where('id',$id)->first();

        $usercontact=User::join('user_contacts','user_contacts.user_id','=','users.id')
        ->select('user_contacts.country','user_contacts.address',
        'user_contacts.location','users.id','user_contacts.website','user_contacts.usercontact_id','user_contacts.phone')->
        where('id',$id)->first();

        $workplatform=WorkPlatform::where('user_id',$id)->get();
        $user = User::with('media')->where('id', $id)->first();


        // $resource=ProfileResource::collection($biodata)->toArray(request());
        return view('admin/accountsetting',compact('biodata','usercontact','workplatform','user'));
    }
}
