<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSessionRecord extends Model
{
    protected $fillable = ['id_number', 'image_path', 'out', 'in'];
}
