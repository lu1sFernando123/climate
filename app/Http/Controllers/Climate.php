<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Climate extends Controller
{
    public function index()
    {
        $climateData = DB::table('microclimate_petengoran')->get();
        return view('user.index', compact('climateData'));
    }
}
