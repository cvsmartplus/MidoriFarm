<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    /** @use HasFactory<\Database\Factories\PenjualanFactory> */
    use HasFactory;
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = [
        'id_greenhouse',
        'id_product',
        'price',
        'quantity',
        'subtotal',
        'date',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
