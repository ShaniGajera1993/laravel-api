<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'cutomer_id',
    //     'amount',
    //     'status',
    //     'billed_dated',
    //     'paid_dated'
    // ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
