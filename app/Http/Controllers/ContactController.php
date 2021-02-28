<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact()
    {
        $contact = Contact::findOrFail(1);
        return view('user.contact', compact('contact'));
    }
}
