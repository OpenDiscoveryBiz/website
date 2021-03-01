<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\json_decode;
use GuzzleHttp\Exception\BadResponseException;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'], '/resolver', function(Request $request){
    $id = trim($request->input('id'));
    if(!empty($id)) {
        $client = new Client([
            'timeout' => 5,
            'connect_timeout' => 5,
            'read_timeout' => 5,
        ]);

        try {
            $response = $client->request('GET', env('OPENDISCOVERY_RESOLVER').'/lookup', [
                'query' => [
                    'id' => $id,
                    'pretty' => 1,
                ],
                'headers' => [
                    'User-Agent' => 'OpenDiscoveryWebsite (+https://www.opendiscovery.biz/)',
                ],
                'allow_redirects' => [
                    'max' => 5,
                ],
            ]);
        } catch(BadResponseException $e) {
            $response = $e->getResponse();
        }

        $result_reply = (string) $response->getBody();
    } else {
        $result_reply = '';
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
