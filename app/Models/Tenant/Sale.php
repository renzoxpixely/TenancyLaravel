<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['customer','product','amount','price','total','branch_id'];
    use HasFactory;

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }    
}




