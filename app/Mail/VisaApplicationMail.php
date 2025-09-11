<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisaApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $files;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $files)
    {
        $this->data = $data;
        $this->files = $files;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['email'], $this->data['full_name']),
            subject: 'New Visa Application from ' . $this->data['full_name'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.visa_application',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        \Illuminate\Support\Facades\Log::info('Files for attachment: ' . print_r($this->files, true));

        foreach ($this->files as $file) {
            if ($file && $file->isValid()) {
                $attachments[] = Attachment::fromPath($file->getRealPath())
                    ->as($file->getClientOriginalName())
                    ->withMime($file->getClientMimeType());
            }
        }

        return $attachments;
    }
}