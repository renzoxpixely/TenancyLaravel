<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Models\Tenant\Sale;
use App\Http\Controllers\Controller;
use App\Models\Tenant\Client;
use App\Models\Tenant\Product;
use App\Models\Tenant\Branch;
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($branch_id)
    {
        $branches = Branch::where('id', $branch_id)->get();

        $sales = Sale::get();
        return view('tenant.sales.sales.index', compact('sales','branch_id','branches'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($branch_id)
    {
        $branches = Branch::where('id', $branch_id)->get();

        $clients = Client::get();

        $products = Product::get();

        return view('tenant.sales.sales.create', compact('clients','products','branch_id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Sale $sale,$branch_id)
    {
 
        $sale->my_store($request);

        return redirect()->route('tenant.branches.sales.sales.index', $branch_id)->with('success', '¡Compra registrada con éxito!');
        // return back()->with('success', '¡Compra registrada con éxito!');
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
