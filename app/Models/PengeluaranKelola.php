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
    public function kategori(){
        return $this->belongsTo(PengeluaranKategori::class, 'id_cat_exp', 'id');
    }

    public function pemasok() {
        return $this->belongsTo(Pemasok::class, 'id_supplier', 'id');
    }
    public function asset() {
        return $this->belongsTo(AssetKelola::class, 'id_asset', 'id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    } 
}
