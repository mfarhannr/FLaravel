<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bazmaController extends Controller
{
    public function responseFunction()
    {
        return response("Ini adalah bentuk response");
    }

    public function responseHeader()
    {
        $bodyResponse = [
            'name' => 'Farhan',
            'school' => 'SMK TI Bazma'
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('Content-Type', 'Application/Json')
            ->withHeaders([
                'App' => 'Farhan Nurrahmat',
                'Classes' => 'XI',
                'web' => 'Laravel'
            ]);
    }

    public function encryptData()
    {
        $encrypt = encrypt("Ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt, $decrypt);
    }

    public function redirectTo()
    {
        return "redirect to";
    }

    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }

    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }

    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.to"));
    }
}
