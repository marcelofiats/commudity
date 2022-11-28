<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_farm',
        'id_activity',
        'deleted',
        'date_created',
        'date_updated'
    ];
}
