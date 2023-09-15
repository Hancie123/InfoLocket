<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bio;
use Illuminate\Support\Facades\DB;
use App\Models\UserContact;

class ProfileController extends Controller
{
    public function profile()
    {
        $id = Session()->get('id');

        $user = User::with('media')->where('id', $id)->first();

        $biodata = User::with("media")->join('bios', 'bios.user_id', '=', 'users.id')
            ->select('bios.bio', 'bios.profession', 'bios.dob', 'users.id', 'bios.bio_id')->where('id', $id)->first();

        $usercontact = User::join('user_contacts', 'user_contacts.user_id', '=', 'users.id')
            ->select(
                'user_contacts.country',
                'user_contacts.address',
                'user_contacts.location',
                'users.id',
                'user_contacts.website',
                'user_contacts.usercontact_id',
                'user_contacts.phone'
            )->where('id', $id)->first();

        $workplatform = User::join('work_platforms', 'work_platforms.user_id', '=', 'users.id')
            ->select(
                'work_platforms.title',
                'work_platforms.description',
                'users.id',
                'work_platforms.work_id'
            )->where('id', $id)->get();



        return view('admin/profile', compact('user', 'biodata', 'usercontact','workplatform'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'bio' => ['required'],
            'profession' => ['required'],
            'dob' => ['required'],
        ]);

        if ($request->status == 'update') {
            try {
                $user_id = $request->user_id;
                $profile = User::find($user_id);

                if ($request->profile_image) {
                    $profile->clearMediaCollection('profile_image');
                    $profile->addMedia($request->profile_image)->toMediaCollection('profile_image');
                }
                $bio_id = $request->bio_id;
                $bio = Bio::find($bio_id);
                $bio->profession = $request->profession;
                $bio->dob = $request->dob;
                $bio->profession = $request->profession;
                $bio->bio = $request->bio;
                $bio->user_id = $request->user_id;
                $bio->save();

                return back()->with('success', 'Profile updated successfully');
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        } elseif ($request->status == 'store') {
            try {
                $user_id = $request->user_id;
                $profile = User::find($user_id);

                if ($request->profile_image) {
                    $profile->addMedia($request->profile_image)->toMediaCollection('profile_image');
                }

                $bio = new Bio();
                $bio->profession = $request->profession;
                $bio->dob = $request->dob;
                $bio->profession = $request->profession;
                $bio->bio = $request->bio;
                $bio->user_id = $request->user_id;
                $bio->save();

                return back()->with('success', 'Profile added successfully');
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        }
    }


    public function storeContact(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'address' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'user_id' => 'required',
        ]);
        if ($request->status == 'store') {
            try {
                return DB::transaction(function () use ($request) {
                    $contact = UserContact::create([
                        'country' => $request->input('country'),
                        'address' => $request->input('address'),
                        'location' => $request->input('location'),
                        'phone' => $request->input('phone'),
                        'website' => $request->input('website'),
                        'user_id' => $request->input('user_id'),
                    ]);

                    if ($contact !== null) {
                        return back()->with('success', 'You have saved the contact details');
                    }
                });
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        } elseif ($request->status == 'update') {

            try {

                return DB::transaction(function () use ($request) {
                    $contact_id = $request->contact_id;
                    $contact = UserContact::find($contact_id);


                    if ($contact) {
                        $contact->country = $request->input('country');
                        $contact->address = $request->input('address');
                        $contact->location = $request->input('location');
                        $contact->phone = $request->input('phone');
                        $contact->website = $request->input('website');
                        $contact->user_id = $request->input('user_id');
                        $contact->save();

                        return back()->with('success', 'You have updated the contact details');
                    } else {
                        return back()->with('fail', 'Contact not found');
                    }
                });
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        }
    }
}
