<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    public function estudiantes()
    {
        return $this->belongsToMany(estudiante::class);
    }
}
