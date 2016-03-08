<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function get(Request $request)
    {
        return view('form');
    }

    public function post(Request $request)
    {
        dd($request->all());
    }
}
