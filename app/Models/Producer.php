<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'document',
        'type_document',
        'birthday',
        'deleted',
        'date_created',
        'date_updated'
    ];

    public function Farm() {
        return $this->hasMany('App\Models\Farm', 'id_producer');
    }
}
