<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\PurchaseDetails;

use App\Models\Tenant\Product;
use App\Models\Tenant\Provider;
use App\Models\Tenant\Purchase;


class PurchaseController extends Controller
{

    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
    }
    public function create()
    {
        $providers = Provider::get();

        $products = Product::pos_products()->get();

        return view('admin.purchase.create', compact('providers','products'));
    }
    public function store(StoreRequest $request, Purchase $purchase)
    {
        $purchase->my_store($request);
        return redirect()->route('purchases.index')->with('toast_success', '¡Compra registrada con éxito!');
    }
    public function show(Purchase $purchase)
    {
        $subtotal = 0 ;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach ($purchaseDetails as $purchaseDetail) {
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        return view('admin.purchase.show', compact('purchase', 'purchaseDetails', 'subtotal'));
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
