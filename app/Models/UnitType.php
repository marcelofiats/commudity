<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'sigle',
        'deleted',
        'date_created',
        'date_updated'
    ];

    public function Culture() {
        return $this->hasOne('App\Models\Culture', 'id_unit_type');
    }

}
