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
        'id_customer',
        'subtotal',
        'total',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Pelanggan::class, 'id_customer','id');
    }
    public function items() {
        return $this->hasMany(PenjualanItem::class, 'id_sale', 'id');
    }
}
