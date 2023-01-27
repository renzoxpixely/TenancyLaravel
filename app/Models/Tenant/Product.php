<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'codigo',
      'name',
      'sale_price_igv',
      'purchase_price_noigv',
      'sku',
      'unitary_presentation',
      'factor',      
      'line',
      'brand_id',
      'quantity',
      'type_product',  
      'branch_id'    
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }  
}
