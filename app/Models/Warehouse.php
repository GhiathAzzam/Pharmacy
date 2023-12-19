<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function warehouse_owner(){
        return $this->belongsTo(Warehouse_Owner::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
    public function medicine(){
        return $this->hasMany(Medicine::class);
    }
}
