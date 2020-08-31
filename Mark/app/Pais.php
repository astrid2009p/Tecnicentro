<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public function departamento () {
        return $this->hasMany(departamento::class, 'idPais', 'id');
      }
}
