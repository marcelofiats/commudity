<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'id',
        'quantity',
        'year',
        'area',
        'date_created',
        'date_updated',
        'deleted',
    ];

    function Farms() {
        return $this->belongsToMany("App\Models\Farm", "farms_activities", 'id_activity');
    }

    function Culture() 
    {
        return $this->belongsTo('App\Models\Culture', 'id_culture');
    }
}
