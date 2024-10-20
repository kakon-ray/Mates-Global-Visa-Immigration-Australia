<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create (Request $data)
    {  
        $data->validate([
            'contact_name' => 'required|regex:/^[a-z A-Z]+$/u|max:25|min:3',
            'contact_phone' => 'required|numeric',
            'contact_email' => 'required',
            'contact_message' => 'required|max:2000|min:10'
        ]);
        $contact = new Contact;
        $contact->contact_name = $data->contact_name;
        $contact->contact_phone = $data->contact_phone;
        $contact->contact_email = $data->contact_email;
        $contact->contact_message = $data->contact_message;
        $contact->save();
        return redirect()->route('contact')->with('status', 'Thank you for your message');
    }
}
