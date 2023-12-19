<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'scientific_name',
        'commercial_name',
        'company',
        'description',
        'quantity',
        'price',
        'expiration_date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   public function warehouse()
   {
       return $this->belongsTo(Warehouse::class);
   }
   public function favourite()
   {
       return $this->hasMany(Favourite::class);
   }
       public function order_medcinie()
   {
       return $this->hasMany(Order_Medicine::class);
   }

}
