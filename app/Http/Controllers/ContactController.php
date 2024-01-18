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

    public function show($id){
        $lang=Localization::where('user_id', auth()->user()->id)->first();
        $contact=Contact::find($id);
        return view('admin.contact.view_contact', compact('contact', 'lang'));
    }

    public function edit($id){
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        $contact= Contact::find($id);
        return view('admin.contact.edit_contact', compact('contact','lang'));
    }

    public function update(ContactRequest $request)
    {
        $contact = Contact::find($request->id);
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
                return redirect('admin/contacts')->with('success', 'Contact updated successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
     public function destroy(string $id){
        $contact= Contact::find($id);
        if (is_null($contact)) {
            return back()->with('error','Contact not found');
        }
        try {
            $contact=DB::transaction(function() use($contact){
                $contact->delete();
                return $contact;
            });
            if ($contact) {
                return back()->with('success','Contact Deleted Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
     }

     public function search(Request $request){
        $contact= Contact::where('name','like','%'.$request->search.'%')->get();
        return view('admin.contacts.index', compact('contact'));
     }
}
