<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function Client()
    {
        $clients = Client::all();
        return view('client', ['clients' => $clients]);
    }
}
