<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GreenHouse extends Model
{
    protected $table = 'green_houses';
    protected $fillable = [
        'created_at',
        'updated_at',
        'name',
        'phone_number',
        'email',
        'type_of_plant',
        'location',
        'status',
        'longitude',
        'latitude',
    ];

    protected $primaryKey = 'id';
    protected $guarded = [];

    public function user() {
        return $this->hasMany(User::class, 'id_greenhouse', 'id');
    }
}
