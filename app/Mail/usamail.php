<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class usamail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $mailmessage;
    public $subject;
    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($message, $subject, $details)
    {
        $this->mailmessage = $message;
        $this->subject = $subject;
        $this->details = $details;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Usamail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiryusaemail',
            with: [
                'mailmessage' => $this->mailmessage,
                'details' => $this->details
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
