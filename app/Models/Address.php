<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'Barangay',
        'Municipality',
        'Province',
        'customers_id',
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
