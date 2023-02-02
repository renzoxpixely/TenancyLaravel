<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'service_name',
        'cost',
        'debit_credit',
        'Ledger_account',
        'branch_id'
      ];
      use HasFactory;
      public function branch()
      {
          return $this->belongsTo(Branch::class);
      }  
}