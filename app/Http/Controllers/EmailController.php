<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'diet' => 'required',
            'eta' => 'required',
        ]);

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'address' => $request->address,
          'diet' => $request->diet,
          'eta' => $request->eta,
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject("Annie Vent Live Registration email");
        });
        
        Guest::create($request->all());

        return redirect()->route('index')->with('success','Guest details have been saved.');
    }
}