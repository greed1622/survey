<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'TypesOfFeedback',
        'Details',
        'Recommendation',
        'customers_id',
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
