<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SubscribeEmail;
use App\Subscription;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function subscribe(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|unique:subscriptions'
    	]);

    	$sub = Subscription::add($request->get('email'));
        $sub->generateToken();

    	Mail::to($sub)->send(new SubscribeEmail($sub));

    	return redirect()->back()->with('status', 'Проверьте вашу почту');
    }

    public function verify($token)
    {
    	$sub = Subscription::where('token', $token)->firstOrFail();
    	$sub->token = null;
    	$sub->save();
    	return redirect('/')->with('status', 'Спасибо за подписку!');
    }
}
