<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SimpleMail;

class ContactController extends Controller
{
    public function postIndex(Request $request){
        $contact = Contact::create($request->all());
        Mail::to('khr.nastasia@gmail.com')->send(new SimpleMail($contact));
        return response()->json($contact);
    }
}
