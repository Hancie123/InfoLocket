<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Localization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ContactController extends Controller
{
    public function index()
    {

        $contacts = Contact::where('user_id', auth()->user()->id)->paginate(10);
        $lang = Localization::where('user_id', auth()->user()->id)->first();

        return view('admin.contact.contacts', compact('contacts', 'lang'));
    }

    public function store(ContactRequest $request)
    {
        try {
            return DB::transaction(function () use ($request) {

                $contact = Contact::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'occupation' => $request->occupation,
                    'user_id' => auth()->user()->id,

                ]);
                if ($contact !== null) {
                    return back()->with('success', 'You have saved the contact successfully!');
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::where('id', $id)->first();
        if (is_null($contact)) {
            return back()->with('error', 'Contact not found!');
        }
        try {
            $contact = DB::transaction(function () use ($contact, $request) {
                $contact->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'occupation' => $request->occupation,
                    'user_id' => auth()->user()->id,
                ]);
                return $contact;
            });

            if ($contact) {
                return back()->with('success', 'Contact updated successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
