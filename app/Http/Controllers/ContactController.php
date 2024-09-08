<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    
    public function AdminContact(){
        $contactdata = Contact::all();
      return view('admin.contact.index',compact('contactdata'));
    }
    public function AdminAddcontact(){
       return view('admin.contact.create');
    }
    public function AdminStorecontact(Request $request){
 
         $request->validate([
            'name' =>'required|max:255|min:4',
            'email' =>'required|email|max:255|min:4',
            'address' =>'required|string|max:255|min:4',
            'phone' =>'required|min:11|numeric',
            ],
            [
                'name.required' =>'Please type your name',
                'email.required' =>'Please type your email',
                'address.required' =>'Please type your address',
                'phone.required' =>'Please type your phone',
                'name.min' =>'Name must  more than 4 Chars',
                'name.max' =>'Name must be  less than 255 Chars',
                'email.min' =>'Email must  more than 4 Chars',
                'email.max' =>'Email must be  less than 255 Chars',
                'address.min' =>'Address must  more than 4 Chars',
                'address.max' =>'Address must be  less than 255 Chars',
                'phone.min' =>'phone must  more than 11 Chars',
                'phone.max' =>'phone must be  less than 255 Chars',
            ]
            
        );
     
 
        Contact::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'Created_at' => Carbon::now()
    
        ]);
        toastr()->success('Contact added  successfully');

        return redirect()->route('admin.contact');
 
    }

    public function Contact(){
        $contacts = DB::table('contacts')->first();
        return view('pages.contact',compact('contacts'));
    }

    public function ContactForm(Request $request){

        $request->validate([
            'name' =>'required|max:255|min:4',
            'email' =>'required|email|max:255|min:4', 
            'subject' =>'required|string|max:255|min:4',
            'message' =>'required|max:500',
         ],     
        );
     
 
        ContactForm::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'Created_at' => Carbon::now()
    
        ]);
      

        return redirect()->route('contact')->with('success' , 'message Succesffully');
 
    }
    

    public function AdminMessage(){
        $messages = ContactForm::all();
        return view('admin.contact.message',compact('messages'));
    }

}
