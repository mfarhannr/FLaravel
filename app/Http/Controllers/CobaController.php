<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function example ()
    {
        return "Hello Controller";
    }

    public function request(Request $request)
    {
        $name = $request ->input("name", "Farhan");
        return $name;
    }

    public function nestedRequest(Request $request)
    {
        $nested = $request->input();
        return json_encode($nested);
    }
}
