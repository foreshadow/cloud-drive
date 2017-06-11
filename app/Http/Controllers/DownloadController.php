<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class DownloadController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->action('DownloadController@show', [$request->code]);
    }

    public function show($id)
    {
        $json = json_decode((new ApiController)->show($id));
        if ($json->code == 0) {
            return redirect($json->url);
        } else {
            return redirect()->back()->withErrors(['download' => $json->message]);
        }
    }
}
