<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
class SunatController extends Controller
{

    public function consultarRuc(Request $request)
    {
        $data = array(
            'token' => 'fd49d95c-0dc4-4d7c-80bd-13f1b2e07943-d23070ac-9472-42ad-96eb-4a69d1f8e1d4',
            'ruc' => $request->ruc
        );

        $client = new Client([
            'base_uri' => 'https://ruc.com.pe/api/v1/consultas',
            'timeout' => 10,
        ]);
    
        $response = $client->request('POST', 'consultas', [
            'headers' => [
                // 'Access-Control-Allow-Origin' => '*',
                // 'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
                'Access-Control-Allow-Headers' => 'Origin, Content-Type, X-Auth-Token',
                'Content-Type' => 'application/json',
                'token' => 'fd49d95c-0dc4-4d7c-80bd-13f1b2e07943-d23070ac-9472-42ad-96eb-4a69d1f8e1d4'
            ],
            'body' => json_encode($data)
        ]);

        
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();
        $arr_body = json_decode($body);
        return response()->json($arr_body, $statusCode);
    }


    public function consultarDni(Request $request)
    {
        $data = array(
            'token' => 'fd49d95c-0dc4-4d7c-80bd-13f1b2e07943-d23070ac-9472-42ad-96eb-4a69d1f8e1d4',
            'dni' => $request->ruc
        );

        $client = new Client([
            'base_uri' => 'https://ruc.com.pe/api/v1/consultas',
            'timeout' => 10,
        ]);
    
        $response = $client->request('POST', 'consultas', [
            'headers' => [
                // 'Access-Control-Allow-Origin' => '*',
                // 'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
                'Access-Control-Allow-Headers' => 'Origin, Content-Type, X-Auth-Token',
                'Content-Type' => 'application/json',
                'token' => 'fd49d95c-0dc4-4d7c-80bd-13f1b2e07943-d23070ac-9472-42ad-96eb-4a69d1f8e1d4'
            ],
            'body' => json_encode($data)
        ]);

        
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();
        $arr_body = json_decode($body);
        return response()->json($arr_body, $statusCode);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($branch_id)
    {
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($branch_id)
    {
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($branch_id, Request $request)
    {
   }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
