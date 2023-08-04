<?php

namespace App\Http\Controllers;

use App\Components\CurlHelper;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Mail\SendTicketEmail;
use Mail;

class HomeController extends Controller
{
    public function confirmPurchase(Request $request) //: RedirectResponse
    {
        // $input = $request->all();
        // print_r($input);
        // die;

        $from_address = $request->from_address;
        $from_address = $request->from_address;
        $to_address = "Our Address";
        $param = [];

        $event_name = 'event1';
        $param['subject'] = 'Your welcome ticket for ' .$event_name;

        return redirect()->intended('check')
        ->withSuccess('success!');
        
        // $email = new SendTicketEmail($param);
        // Mail::to('venkat.konda96@gmail.com')->send($email);
        
        // $base_url = "https://nordekscan.com/api";

        // $parameters = array(
        //     'module' => 'transaction',
        //     'action' => 'gettxinfo',
        //     'txhash' => $request->trx_hash,
        // );

        // $url = $base_url . '?' . http_build_query($parameters);

        // $response = CurlHelper::curlGetContent($url);
        // if($response) {
        //     $response = json_decode($response);
        // }
        return redirect()->intended('check')
        ->withSuccess('success!');
        // return view('eticket')->with('request', $request->all());
    }

    public function checkTicket(Request $request)
    {
        return view('eticket');
    }
    public function emailTicket(Request $request)
    {
        return view('email_ticket');
    }
}
