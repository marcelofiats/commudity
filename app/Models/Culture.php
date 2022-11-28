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
}
