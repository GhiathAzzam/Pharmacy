<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseOwner extends Model
{
    use HasFactory;
//    protected $table = 'warehouse_owners';

    protected $fillable=['user_id',];
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function warehouse()
    {
        return $this->hasOne(Warehouse::class);

    }
}



