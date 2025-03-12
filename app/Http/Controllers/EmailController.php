<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\inquiryemail;
use App\Mail\partnerenquirymail;
use App\Mail\thankyou;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Mail\JobApplicationMail;
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\Storage;

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

    public function sendJobApplication(Request $request)
    {
        try {
            // dd($request->all());

            // Validate form inputs
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|digits_between:10,15',
                'job_role' => 'required|string',
                'resume' => 'required|mimes:pdf,doc,docx|max:2048',
                'message' => 'nullable|string',
                'g-recaptcha-response' => 'required',
            ]);
            // Verify reCAPTCHA with Google
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $responseData = $response->json();

            if (!$responseData['success'] || $responseData['score'] < 0.5) {
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
            }

            // Handle file upload
            if ($request->hasFile('resume')) {
                $resumePath = $request->file('resume') ? $request->file('resume')->store('resumes', 'local') : null;
            } else {
                return back()->withErrors(['resume' => 'Resume upload failed.'])->withInput();
            }
            

            // Prepare email data
            $details = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'job_role' => $request->input('job_role'),
                'resume' => $resumePath,
                'message' => $request->input('message'),
            ];

            // Define recipient emails
            $toEmail = ['hr@yuvmedia.com'];
            // $toEmail = ['anshulyuvmedia@gmail.com'];
            $subject = "New Job Application: " . $details['name'];

            // Send emails
            Mail::to($toEmail)->send(new JobApplicationMail($details));
            Mail::to($request->input('email'))->send(new ThankYouMail($details));

            // Log submission
            Log::info('Job Application Submitted: ', $details);

            return redirect()->back()->with('success', 'Your job application has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Job Application Error: ' . $e->getMessage());

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
