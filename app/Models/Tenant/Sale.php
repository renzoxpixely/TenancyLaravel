<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'user_id',
        'sale_date',
        'tax',
        'total',
        'status',
        'picture',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    public function saleDetails(){
        return $this->hasMany(SaleDetails::class);
    }
    public function update_stock($id, $quantity){
        $product = Product::find($id);
        $product->add_stock($quantity);
    }
    public function my_store($request){

        $sale = self::create($request->all()+[
      
            'sale_date'=>Carbon::now('America/Lima'),
        ]);


        $sale->add_sale_details($request);
    }
    public function add_sale_details($request){
        foreach ($request->product_id as $key => $id) {
            $this->update_stock($request->product_id[$key], $request->quantity[$key]);
            $results[] = array("product_id"=>$request->product_id[$key], "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }
        $this->saleDetails()->createMany($results);
    } 
}




