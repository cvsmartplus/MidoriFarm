<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    //
    use HasFactory;

    protected $table = 'sensors';
    protected $fillable = [ 'type', 'name', 'unit'];
}
