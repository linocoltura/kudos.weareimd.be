<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compliment extends Model
{
    protected $fillable = [
        'from_id', 'to_id', 'message'
    ];
}