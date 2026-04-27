<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_id',
        'size_id',
        'stock',
        'price',
    ];

    protected $table = 'variant_stock';
}
