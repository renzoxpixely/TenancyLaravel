<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tenant\Branch;
use App\Models\Tenant\Client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($branch_id)
    {
        $clients = Client::where('branch_id', $branch_id)->get();
        $branches = Branch::where('id', $branch_id)->get();
        return view('tenant.sales.clients.index', compact('clients', 'branch_id','branches'));
        // $cities = City::where('country_id', $country_id)->get();
        // return view('admin.cities.index', compact('cities', 'country_id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($branch_id)
    {
        return view('tenant.clients.create', compact('branch_id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($branch_id,Request $request)
    {
        Client::create($request->all() + ['branch_id' => $branch_id]);
        return redirect()->route('tenant.branches.clients.index', $branch_id);
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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

    function buscarRuc(Request $request)
    {
        if ($request->ajax()) {
            $ruc=$request->get('ruc');
            $ruta = "https://ruc.com.pe/api/v1/consultas";
            //$token = "f050c3ab-d85a-4083-91e9-e5b068ad9c50-64a32f1c-3c31-4d35-ae13-702ee3239485";
            $token="fd49d95c-0dc4-4d7c-80bd-13f1b2e07943-d23070ac-9472-42ad-96eb-4a69d1f8e1d4";

            $rucaconsultar = $ruc;
            $data = array(
                "token" => $token,
                "ruc"   => $rucaconsultar
            );
                
            $data_json = json_encode($data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $ruta);
            curl_setopt(
                $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                )
            );
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $respuesta  = curl_exec($ch);
            curl_close($ch);

            $leer_respuesta = json_decode($respuesta, true);
            $data=array('entidad' => $leer_respuesta);
            echo json_encode($data);
        }
    }











}
