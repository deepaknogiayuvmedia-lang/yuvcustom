<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $email = $this->subject("New Job Application: " . ($this->details['name'] ?? ''))
            ->view('emails.job_application');

        if (!empty($this->details['resume']) && file_exists(storage_path('app/' . $this->details['resume']))) {
            $email->attach(storage_path('app/' . $this->details['resume']), [
                'as' => 'Resume.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        return $email;
    }
}
