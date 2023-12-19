<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'warehouse_id',
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

}
