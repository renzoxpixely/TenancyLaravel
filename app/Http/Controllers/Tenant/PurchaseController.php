<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\PurchaseDetails;

use App\Models\Tenant\Product;
use App\Models\Tenant\Provider;
use App\Models\Tenant\Purchase;

use App\Models\Tenant\Branch;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class PurchaseController extends Controller
{

    public function index($branch_id)
    {
        $branches = Branch::where('id', $branch_id)->get();

        $purchases = Purchase::get();
        return view('tenant.purchases.index', compact('purchases','branch_id'));
    }
    public function create()
    {
        $providers = Provider::get();

        $products = Product::get();

        return view('tenant.purchases.create', compact('providers','products'));
    }
    public function store(StoreRequest $request, Purchase $purchase)
    {
  
        $purchase->my_store($request);
        return redirect()->route('tenant.purchases.index')->with('toast_success', '¡Compra registrada con éxito!');
    }
    public function show(Purchase $purchase)
    {
        $subtotal = 0 ;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach ($purchaseDetails as $purchaseDetail) {
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        return view('tenant.purchases.show', compact('purchase', 'purchaseDetails', 'subtotal'));
    }
    public function edit(Purchase $purchase)
    {
        // $providers = Provider::get();
        // return view('admin.purchase.edit', compact('purchase'));
    }
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        // $purchase->update($request->all());
        // return redirect()->route('purchases.index');
    }
    public function destroy(Purchase $purchase)
    {
        // $purchase->delete();
        // return redirect()->route('purchases.index');
    }

}
