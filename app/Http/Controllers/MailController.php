<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Test title From Laravel',
            'body' => 'This is a mail from laravel'
        ];

        Mail::to('m.mohamedeid11@gmail.com')->send(new TestMail($details));

        return "Mail has been sent";
    }
}
