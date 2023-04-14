<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Job_category;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        $categories = Job_category::all();
        return view('contact', ['categories' => $categories]);
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'company' => 'required',
            'salary' => 'required|regex:/^[0-9]+$/|min:3',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'job_category' => 'required'
        ]);
        //  Store data in database
        $contact = new Contact([
            'name' => $request->name,
            'description' => $request->description,
            'company' => $request->company,
            'salary' => $request->salary,
            'location' => $request->location,
            'job_category' => $request->job_category,
            'email' => $request->email,
            'tel' => $request->tel,
        ]);
        $contact->save();

        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'company' => $request->get('company'),
            'salary' => $request->get('salary'),
            'job_category' => $request->get('job_category'),
            'tel' => $request->get('tel'),
            'email' => $request->get('email'),
            'location' => $request->get('location'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('admin@admin.pl', 'Admin')->subject($request->get('name'));
        });
        return redirect(route('index'))->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
