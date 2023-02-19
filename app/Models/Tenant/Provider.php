<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'national_identity_document',
        'document_number',
        'names_surnames',
        'display_name',
        'address',
        'location_code',
        'email',
        'mobile_phone',
        'landline_phone',
        'branch_id'  
    ];
    
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    
    public function products(){
        return $this->hasMany(Product::class);
    }
}
