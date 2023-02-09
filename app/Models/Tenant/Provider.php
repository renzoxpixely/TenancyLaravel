<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email','ruc_number', 'address','phone',
    ];
    
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    
    public function products(){
        return $this->hasMany(Product::class);
    }
}
