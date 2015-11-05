<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Send a booking request e-mail to the admin.
     *
     * @param  Request  $request
     * @return Response
     */
    public function mail(Request $request)
    {
        $content = [
            'name' => $request->name,
            'phone' => $request->phone,
            'service' => $request->service,
            'details' => $request->details
        ];
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'service' => 'required'
        ]);

        Mail::send('emails.booking', $content, function ($m) {
            $m->to('euphoriahairdressing@gmail.com')->subject('Website booking request');
        });

        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return response()->view('thanks')->header( "Refresh", "5;url=". route('home') );
    }
}