<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    public function materias()
    {
        return $this->belongsToMany(materia::class);
    }
}
