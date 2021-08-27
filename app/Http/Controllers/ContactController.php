<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contactForm(){
        
        return view('contact.contactForm');
    }

     public function sendinqurie(Request $data){

        
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'inqurie' => ['required', 'string', 'max:255'],

        ]);

        $contact = Contact::create([
            'name' => $data['name'],
            'inqurie' => $data['inqurie'],
           
        ]);
        
        return back()->with('success', 'Inqurie sent Successfully!');
        


    }

    public function viewinqurie(){
        $data = Contact::all()->toArray();

        return view('contact.viewInqurie',compact('data'));
    }
}
