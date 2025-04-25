<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPelanggan extends Model
{
    use HasFactory;
    protected $table = 'customer_debts';
    protected $fillable = [
        'id_greenhouse',
        'name',
        'amount',
        'status',
        'date',
        'due_date',
    ];
    protected $primariKey = 'id';
    protected $guarded = [];
    public function customer()
    {
        return $this->belongsTo( Pelanggan::class, 'id_customer', 'id');
    }
}
