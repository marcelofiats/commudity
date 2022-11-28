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

    function activity() {
        return $this->belongsToMany("App\Models\Activity", "farms_activities");
    }
}
