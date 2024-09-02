<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'Rating1',
        'Rating2',
        'Rating3',
        'Rating4',
        'Rating5',
        'Rating6',
        'customers_id',
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
