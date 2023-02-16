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
      'code',
      'name',
      'stock',
      'image',
      'sell_price',
      'status',
      'category_id',
      'provider_id',
      'branch_id'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }  

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
    
    
    public function add_stock($quantity){
        $this->increment('stock', $quantity);
    }
    public function subtract_stock($quantity){
        $this->decrement('stock', $quantity);
    }
}
