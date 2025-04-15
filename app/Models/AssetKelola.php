<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetKelola extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'name_product',
        'purchase',
        'id_cat_asset',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(AssetKategori::class, 'id_cat_asset', 'id');
    }
}
