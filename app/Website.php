<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = ['name', 'url', 'state'];
    protected $casts = [
        'state' => 'array',
    ];
}
