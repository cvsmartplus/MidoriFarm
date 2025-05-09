<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //
    protected $table = 'customers';
    protected $fillable = [
        'id_greenhouse',
        'name',
        'address',
        'email',
        'phone_number',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function tagihan()
{
    return $this->hasMany(TagihanPelanggan::class, 'id_customer', 'id');
}

}

