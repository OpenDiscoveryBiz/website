<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/resolver', function (Request $request) {
    $id = trim((string) $request->input('id'));
    $result_reply = '';

    if ($id !== '') {
        $response = Http::timeout(5)
            ->withHeaders([
                'User-Agent' => 'OpenDiscoveryWebsite (+https://www.opendiscovery.biz/)',
            ])
            ->withOptions(['allow_redirects' => ['max' => 5]])
            ->get(rtrim(config('opendiscovery.resolver'), '/').'/lookup', [
                'id' => $id,
                'pretty' => 1,
            ]);

        if ($response->failed() && ($response->status() < 400 || $response->status() > 499)) {
            $response->throw();
        }

        $result_reply = $response->body();
    }

    return view('resolver', [
        'id' => $id,
        'result_reply' => $result_reply,
    ]);
});

Route::get('/specifications', function () {
    return view('specifications');
});

Route::get('/investigator', function () {
    return view('investigator');
});

Route::get('/publisher', function () {
    return view('publisher');
});
