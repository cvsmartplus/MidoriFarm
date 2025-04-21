<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengeluaranKelola extends Model
{
    protected $table = 'expenses';
    protected $fillable = [
        'id_greenhouse',
        'id_cat_exp',
        'subtotal',
        'description',
        'date',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(PengeluaranKategori::class, 'id_cat_exp');
    }

}
