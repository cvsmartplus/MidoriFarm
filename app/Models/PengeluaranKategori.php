<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengeluaranKategori extends Model
{
    protected $table = 'category_expenses';
    protected $fillable = [
    'id_greenhouse',
    'name_category',
    ];
    protected $primarykey = 'id';
    protected $guarded = [];
}
