<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(Request $request)
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $name = [
            "firstName" => $request["firstName"],
            "lastName" => $request["lastName"],
        ];
        return view('welcome')->with('name', $name);
    }
}
