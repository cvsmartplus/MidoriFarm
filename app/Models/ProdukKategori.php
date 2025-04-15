<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukKategori extends Model
{
    /** @use HasFactory<\Database\Factories\ProdukKategoriFactory> */
    use HasFactory;
    protected $table = 'category_products';
    protected $fillable = [
        'name_category',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
}
