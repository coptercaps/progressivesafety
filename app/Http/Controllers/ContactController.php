<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Classes\Alert;

class ContactController extends Controller
{
    private $_receivers = [
                "someone@progressivesafety.se"
            ];

    public function index() {
    	return view('contact');
    }

    public function send(Request $request) {

    	$this->validate($request, [
    			"firstname" => 'required|min:2|max:255',
    			"lastname" => 'required|min:2|max:255',
    			"email" => 'required|email',
    			"subject" => 'required|min:2|max:255',
    			"message" => 'required|min:2|max:255'
    		]);

        // Validation ok, send mail to each receiver
        // foreach ($this->_receivers as $receiver) {
        //     Mail::send('mails.contact', ['request', $request], function($m) use ($request, $receiver) {
        //         $fullname = $request->firstname.' '.$request->lastname;
        //         $m->from("...@progressivesafety.se", $fullname);
        //         $m->to($receiver, "Progressive Safety")->subject($request->subject);
                
        //         dd($m);
        //     });
        // }
    	
    	return redirect('/contact')->with('status', Alert::create('success', '<b>Du har skickat iväg ditt meddelande.</b> Vi kontaktar dig så fort vi kan!'));
    }
}
