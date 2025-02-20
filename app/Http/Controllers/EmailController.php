<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\inquiryemail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{

    public function sendEmail(Request $request)
    {
        try {
            Mail::raw('SMTP test successful', function ($message) {
                $message->to('anshulyuvmedia@gmail.com')
                    ->subject('SMTP Test');
            });
            echo "Mail Sent Successfully!";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        // Validate form inputs
        $request->validate([
            'username' => 'required|string|max:255',
            'brandname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,15',
            'website' => 'required|string',
            'industry' => 'required|string',
            'message' => 'required|string',
        ]);

        // Get form data
        $details = [
            'name' => $request->input('username'),
            'brandname' => $request->input('brandname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'industry' => $request->input('industry'),
            'message' => $request->input('message'),
        ];

        // Define recipient email
        $toEmail = $details['email'];
        $subject = "New Inquiry from " . $details['name'];
        $message = "You have received a new inquiry.";
        // Log::info('Email sent to: ' . json_encode($details));

        // Send the email
        Mail::to($toEmail)->send(new inquiryemail($message, $subject, $details));
        
        // Log::info('Email sent to: ' . json_encode($details));

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
    }
}
