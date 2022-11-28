<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'id_unit_type',
        'data',
        'deleted',
        'date_created',
        'date_updated'
    ];

    function unit_type() 
    {
        return $this->hasOne("App\Models\UnitType", 'id');
    }

    function activities() 
    {
        return $this->hasMany('App\Models\Activity', 'id_culture');
    }
}
