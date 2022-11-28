<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$table = 'activities';

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'quantity',
        'year',
        'area',
        'date_created',
        'date_updated',
        'deleted',
    ];

}
