<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    use HasFactory;
    //
    protected $table = 'suppliers';
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone_number',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];
}
