<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $json = json_decode((new ApiController)->store($request));
        if ($json->code == 0) {
            return redirect()->back()->withErrors(['code' => $json->value]);
        } else {
            return redirect()->back()->withErrors(['upload' => $json->message]);
        }
    }
}
