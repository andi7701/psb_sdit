<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //
    public function show()
    {
        $contact = Contact::find(1);
        return view('user.contact', compact('contact'));
    }

    public function showadmin()
    {
        $contact = Contact::find(1);
        return view('backend.contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|min:2',
            'phone' => 'required|numeric|min:2',
            'phone2' => 'numeric|min:2|nullable',
            'phone3' => 'numeric|min:2|nullable'
        ]);

        $contact = Contact::findOrFail($id);
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->phone2 = $request->phone2;
        $contact->phone3 = $request->phone3;
        $contact->save();

        Session::flash('success', 'Manage Kontak Sukses Terupdate');

        return redirect()->back();
    }
}
