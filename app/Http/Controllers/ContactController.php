<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;


class ContactController extends Controller
{

    public function index()
    {
        // Set the locale for the current request
        $locale = session('locale', 'en');
        app()->setLocale($locale);

        // Return the contact view
        return view('contact');
    }

    public function submit(Request $request)
    {

        // dd($request->all());
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/^[0-9]{10,15}$/',
            'query' => 'required|string|max:5000',
        ]);

    // Send the data to a specific email
    Mail::to('moiz.0282@gmail.com')->send(new \App\Mail\ContactFormSubmission($request->all()));

    // Return a response
    return back()->with('success', 'Your message has been sent successfully!');
    }



}