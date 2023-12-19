<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function WarehouseOwner(){
        return $this->belongsTo(WarehouseOwner::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
    public function medicine(){
        return $this->hasMany(Medicine::class);
    }
}
