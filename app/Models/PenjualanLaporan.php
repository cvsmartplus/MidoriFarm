<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanLaporan extends Model
{
    /** @use HasFactory<\Database\Factories\OrderSaleFactory> */
    use HasFactory;
    use HasFactory;
    protected $table = 'order_sales';
    protected $fillable = [
        'name',
        'id_product',
        'id_sale',
        'quantity',
        'subtotal',
        'status',
        'date',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function produk()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'id_sale', 'id');
    }
}
