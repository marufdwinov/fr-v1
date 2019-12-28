<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassStudy extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name', 'code', 'day', 'start', 'end'
    ];
}
