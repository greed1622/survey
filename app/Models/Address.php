<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'HouseNo',
        'Street',
        'Barangay',
        'Municipality',
        'Province',
        'Zip',
        'customers_id',
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
