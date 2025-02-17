<?php

namespace App\Jobs;

use App\Mail\ContactFormMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactFormEmail implements ShouldQueue
{
    use Dispatchable,InteractsWithQueue, Queueable ,SerializesModels;

    public $data;

    /**
     * Create a new job instance.
     */
   
    public function __construct($contactDetails)
    {
        $this->data=$contactDetails;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('rahatit486@gmail.com')->send(new ContactFormMail($this->data));
    }
}
