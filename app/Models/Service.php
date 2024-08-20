<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        'ServiceAvailed',
        'Purpose',
        'PersonTransacted',
        'OfficeTransacted',
        'customers_id',
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
