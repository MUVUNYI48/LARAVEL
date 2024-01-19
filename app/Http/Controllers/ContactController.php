<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // */
    public function showForm()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submitForm(Request $request)
    {
        // Validation (you may customize this based on your requirements)
       $contactData= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Process the form data (in a real-world scenario, you would typically store it in a database)
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        ContactMessage::create($contactData);

        // You can perform additional actions here, such as sending an email or storing the data in a database.

        // For this example, let's just return a success message.
        return view('contact', ['successMessage' => 'Form submitted successfully!']);
    }
}