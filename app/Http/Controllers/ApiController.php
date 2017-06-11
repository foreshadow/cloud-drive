<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class ApiController extends Controller
{
    public function index()
    {
        return view('help');
    }

    public function show($id)
    {
        if ($file = File::where('code', $id)->first()) {
            return json_encode(['code' => 0, 'url' => $file->url]);
        } else {
            return json_encode(['code' => -1, 'message' => 'file does not exist']);
        }
    }

    public function store(Request $request)
    {
        \qcloudcos\Conf::$APP_ID = env('QCLOUD_APP_ID');
        \qcloudcos\Conf::$SECRET_ID = env('QCLOUD_SECRET_ID');
        \qcloudcos\Conf::$SECRET_KEY = env('QCLOUD_SECRET_KEY');
        \qcloudcos\Cosapi::setTimeout(180);
        \qcloudcos\Cosapi::setRegion('sh');

        if ($request->hasFile('file') == false) {
            return json_encode(['code' => -1, 'message' => 'no file uploaded']);
        }
        $file = new File();
        do {
            $file->code = rand(1000, 9999);
        } while (File::where('code', $file->code)->first());
        $file->name = $request->file('file')->getClientOriginalName();
        $ret = \qcloudcos\Cosapi::upload(
            'clouddisk',
            $request->file('file')->getPathname(),
            sprintf('usercontent/%s-%s', $file->code, $file->name)
        );
        if ($ret['code'] != 0) {
            return json_encode(['code' => -2, 'message' => $ret['message']]);
        }
        $file->url = $ret['data']['source_url'];
        if ($file->save() == false) {
            return json_encode(['code' => -3, 'message' => 'database saving error']);
        }
        return json_encode(['code' => '0', 'value' => $file->code]);
    }
}
