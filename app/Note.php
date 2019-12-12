<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = [
        'user_id',
        'topic',
        'message',
        'warning',
        'penalty',
        'is_paid'
    ];

}
