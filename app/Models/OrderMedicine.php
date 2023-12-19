<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMedicine extends Model
{
    protected $fillable=['quantity'];
    use HasFactory;

public function order()
{
    return $this->belongsTo(Order::class);
}
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }


}
