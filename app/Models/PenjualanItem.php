<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanItem extends Model
{
    protected $table = 'sale_items';
    protected $fillable = [
        'id_greenhouse',
        'id_sale',
        'id_product',
        'id_customer',
        'created_at',
        'updated_at',
        'price',
        'quantity',
        'subtotal',
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'id_sale', 'id');
    }
    public function produk()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
