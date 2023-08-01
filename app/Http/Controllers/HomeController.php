<?php

namespace App\Http\Controllers;

use App\Components\CurlHelper;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function confirmPurchase(Request $request): RedirectResponse
    {
        /*$input = $request->all();
        $from_address = $request->from_address;
        $to_address = "Our Address";

        $base_url = "https://nordekscan.com/api";

        $parameters = array(
            'module' => 'transaction',
            'action' => 'gettxinfo',
            'txhash' => $request->trx_hash,
        );

        $url = $base_url . '?' . http_build_query($parameters);


        $response = CurlHelper::curlGetContent($url);
        if($response) {
            $response = json_decode($response);

        }*/

        return view('eticket')->with('request', $request->all());
    }

    public function checkTicket(Request $request)
    {

        return view('eticket');
    }
}
