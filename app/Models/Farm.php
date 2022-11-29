<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'city',
        'deleted',
        'date_created',
        'date_updated',
        'id_producer'
    ];

    function activities() {
        return $this->belongsToMany("App\Models\Activity", "farms_activities", 'id_farm', 'id_activity');
    }

    function producer() {
        return $this->belongsTo("App\Models\Producer", 'id_producer');
    }
}
