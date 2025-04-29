<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPemasok extends Model
{
    use HasFactory;
    protected $table = 'supplier_debts';
    protected $fillable = [
        'id_greenhouse',
        'name',
        'amount',
        'debt_date',
        'due_date',
        'status',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function supplier()
    {
        return $this->belongsTo( Pemasok::class, 'id_supplier', 'id');
    }
}
