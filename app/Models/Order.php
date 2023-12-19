<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_ordered',
        'total_price',
        'status',
        'payment_status'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }
    public function order_medicine(){
        return $this->hasMany(Order_Medicine::class);
    }
}
