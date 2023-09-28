<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ContactController extends Controller
{
    public function index(){
        $id = Session()->get('id');
        $contact=Contact::where('user_id', $id)->paginate(4);
        $user = User::with('media')->where('id', $id)->first();

        return view('admin/contacts',compact('contact','user'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',

        ]);

        try {
            return DB::transaction(function () use($request){
                $contact=Contact::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'user_id'=>$request->user_id,
                    'location'=>$request->location,
                    'occupation'=>$request->occupation,

                ]);
                if($contact!==null){
                    return back()->with('success','You have saved the contact successfully!');
                }


            });

        }
        catch(\Exception $e){
            return back()->with('fail',$e->getMessage());

        }

    }
}
