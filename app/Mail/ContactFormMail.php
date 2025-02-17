<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $contactDetails;
    public function __construct($contactDetails)
    {
        $this->contactDetails=$contactDetails;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'AIHUT CONTACT US -'.$this->contactDetails['name'],
        );
    }

    
       // Build the email
       public function build()
       {
           // Send a plain HTML email directly without a view
           return $this->subject('AIHUT CONTACT US -'.$this->contactDetails['name'])
                       ->html($this->generateHtmlBody());
        // Log::info('Sending email with content:', $this->contactDetails);

        // return $this->subject('testing')
        //             ->view('mail_template.contact_mail')
        //             ->with([
        //                 'name' => $this->contactDetails['name'],
        //                 'email' => $this->contactDetails['email'],
        //                 'message' => $this->contactDetails['message'],
        //             ]);
       }
   
       // Custom function to generate the HTML email body
       private function generateHtmlBody()
       {
           return "
               <!DOCTYPE html>
               <html lang='en'>
               <head>
                   <meta charset='UTF-8'>
                   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                   <title>RahatGroup</title>
               </head>
               <body style='margin: 0; padding: 0; background-color: #f7f7f7;'>
                   <table width='100%' cellspacing='0' cellpadding='0' border='0' align='center' bgcolor='#f7f7f7'>
                       <tr>
                           <td align='center'>
                               <table width='600' cellspacing='0' cellpadding='0' border='0' align='center' bgcolor='#ffffff' style='margin: 20px auto; border: 1px solid #ddd; box-sizing: border-box;'>
                                   <!-- Header with logo -->
                                   <tr>
                                       <td align='center' style='padding: 20px;'>
                                           <img src='https://aihut.in/public/images/AIHUT_LOGO.png' alt='Company Logo' width='200' style='display: block; margin-bottom: 20px;'>
                                           <h2 style='margin: 0; font-family: Arial, sans-serif; color: #333;'>Contact Details</h2>
                                       </td>
                                   </tr>
       
                                   <!-- Body of the email -->
                                   <tr>
                                       <td style='padding: 20px; font-family: Arial, sans-serif; color: #333;'>
                                           <h1 style='font-size: 24px; margin: 0 0 15px;'>New Message Received</h1>
                                           <p style='font-size: 16px; margin: 10px 0;'><strong>Name:</strong> {$this->contactDetails['name']}</p>
                                           <p style='font-size: 16px; margin: 10px 0;'><strong>Email:</strong> {$this->contactDetails['email']}</p>
                                           <p style='font-size: 16px; margin: 10px 0;'><strong>Phone:</strong> {$this->contactDetails['phone']}</p>
                                           <p style='font-size: 16px; margin: 10px 0; text-transform:capitalize;'><strong>Partnership Type:</strong> {$this->contactDetails['partnership_type']}</p>
                                           <p style='font-size: 16px; margin: 10px 0;'><strong>Message:</strong></p>
                                           <p style='font-size: 16px; margin: 10px 0;'>{$this->contactDetails['message']}</p>
                                       </td>
                                   </tr>
       
                                   <!-- Footer -->
                                   <tr>
                                       <td style='padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #777;'>
                                           <p style='margin: 0;'>This message was sent from aihut.in</p>
                                           <p style='margin: 0;'>&copy; 2025 aihut.in. All rights reserved.</p>
                                       </td>
                                   </tr>
                               </table>
                           </td>
                       </tr>
                   </table>
               </body>
               </html>
           ";
       }
       
}
