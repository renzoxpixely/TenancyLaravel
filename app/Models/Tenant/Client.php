<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }  

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }          
    public function products(){
        return $this->hasMany(Product::class);
    }
}
