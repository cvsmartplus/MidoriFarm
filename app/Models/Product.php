<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name_product',
        'selling_price',
        'id_cat_product',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'id_cat_product', 'id');
    }
}
