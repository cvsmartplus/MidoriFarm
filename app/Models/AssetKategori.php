<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetKategori extends Model
{
    protected $table = 'category_assets';
    protected $fillable = [
        'name_category',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
}
