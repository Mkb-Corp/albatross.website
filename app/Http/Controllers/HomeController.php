<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    function subscribe_to_newsletter() : View {
        return view('home')->with('message', 'Souscription reussie');
    }

    function trading_room() : View {
        return view('trading-room');
    }
}
