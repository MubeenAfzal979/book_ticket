<?php

namespace App\Http\Controllers;

use App\Components\CurlHelper;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Ticket;
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
//        $email = new SendTicketEmail();
//        Mail::to('venkat.konda96@gmail.com')->send($email);

         $input = $request->all();
         $from_address = $request->from;
         $to_address = "0x09F2C321ccC79644d72dC7F7d679d459F453da4d";

        $check = Ticket::where('trx_hash',$request->hash)->first();

        if($check) {
            if($check->confirm_ticket == 1) {
                $message = 'This Hash has been already used';
                return view('check')->with('message', $message);
            }
        }

         $ticket = new Ticket();
         $ticket->full_name = $request->username;
         $ticket->email = $request->email;
         $ticket->phone = $request->phone;
         $ticket->from_address = $request->from;
         $ticket->trx_hash = $request->hash;
         $ticket->save();


         $base_url = "https://nordekscan.com/api";

         $parameters = array(
             'module' => 'transaction',
             'action' => 'gettxinfo',
             'txhash' => $request->hash,
         );

         $url = $base_url . '?' . http_build_query($parameters);

         $response = CurlHelper::curlGetContent($url);

         if($response) {
             $response = json_decode($response,true);
             $result = $response['result'];

             if(isset($result)) {

                 $value = round($result['value']/1000000000000000000);

                 if($value < 199){
                     $message = 'You are required to pay 200 $NRK';
                     return view('check')->with('message',$message);
                 }

               //  if (($result['to']) !== $to_address) {
                 if(strcasecmp(($result['to']), $to_address) === 1){

                     $message = 'You are required to pay 200 $NRK on this address '.$to_address;
                     return view('check')->with('message',$message);
                 }

                 $ticket->confirm_ticket = 1;
                 $ticket->save();
                 //$email = new SendTicketEmail($ticket);
               // Mail::to($request->email)->send($email);
                 return view('eticket')->with('ticket', $ticket);
             }
             $message = 'Something Went Wrong please try again with right information';
             return view('check')->with('message',$message);
         }
         $message = 'Something Went Wrong please try again with right information';
        return view('check')->with('message',$message);

    }

    public function checkTicket(Request $request)
    {
        return view('fail');
    }
}
