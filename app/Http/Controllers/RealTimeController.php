<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealTimeController extends Controller
{
    public function fetchData()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://vps.isi-net.org:5000/GetDataGistingNew');
        $data = json_decode($response->getBody(), true);

        return response()->json(['irradiation' => $data['result'][0]['humidity_280']]);
    }
}

