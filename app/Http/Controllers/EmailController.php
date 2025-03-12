<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\inquiryemail;
use App\Mail\partnerenquirymail;
use App\Mail\thankyou;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class EmailController extends Controller
{

    public function sendEmail(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'username' => 'required|string|max:255',
            'brandname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,15',
            'website' => 'required|string',
            'industry' => 'required|string',
            'servicedropdown' => 'required|string',
            'message' => 'required|string',
            // 'g-recaptcha-response' => 'required',
        ]);

        // // Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'), // Ensure your secret key is in .env
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]);

        $responseData = $response->json();

        // Check if reCAPTCHA verification passed
        if (!$responseData['success'] || $responseData['score'] < 0.5) {
            return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
        }

        // Get form data
        $details = [
            'name' => $request->input('username'),
            'brandname' => $request->input('brandname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'industry' => $request->input('industry'),
            'servicedropdown' => $request->input('servicedropdown'),
            'message' => $request->input('message'),
        ];
        // Define recipient email
        $toEmail = ['sales@yuvmedia.com', 'admin@yuvmedia.com'];
        //$toEmail = ['anshulyuvmedia@gmail.com'];
        $subject = "New Inquiry from " . $details['name'];
        $message = "You have received a new inquiry.";
        // Log::info('Email sent to: ' . json_encode($details));
        
        // Send the email
        Mail::to($toEmail)->send(new inquiryemail($message, $subject, $details));
        Mail::to($request->input('email'))->send(new thankyou());
        // dd('detailsnew');

        Log::info('Email sent to: ' . json_encode($details));

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
    }

    public function sendPartnerEmail(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'username' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,15',
            'city' => 'required|string',
            'pincode' => 'required|string',
            'state' => 'required|string',
            'address' => 'required|string|max:255',
            'g-recaptcha-response' => 'required',
        ]);

        // // Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'), // Ensure your secret key is in .env
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]);

        $responseData = $response->json();

        // Check if reCAPTCHA verification passed
        if (!$responseData['success'] || $responseData['score'] < 0.5) {
            return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
        }

        // Get form data
        $details = [
            'name' => $request->input('username'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'pincode' => $request->input('pincode'),
            'state' => $request->input('state'),
            'address' => $request->input('address'),
        ];
        // Define recipient email
        $toEmail = ['sales@yuvmedia.com', 'admin@yuvmedia.com'];
        //$toEmail = ['anshulyuvmedia@gmail.com'];
        $subject = "New Inquiry for Business Partner : " . $details['name'];
        $message = "You have received a new inquiry.";
        // Log::info('Email sent to: ' . json_encode($details));
        
        // Send the email
        Mail::to($toEmail)->send(new partnerenquirymail($message, $subject, $details));
        Mail::to($request->input('email'))->send(new thankyou());
        // dd('detailsnew');

        Log::info('Email sent to: ' . json_encode($details));

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
    }
}
