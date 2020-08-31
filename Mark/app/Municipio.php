<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public $timestamps = true;
    protected $table = 'municipio';

  protected $fillable = ['idpais','idMunicipio',
    'municipio'];

  protected $hidden = [
    'id',
  ];

  public function pais () {
    return $this->hasMany(pais::class, 'id', 'idPais');
  }

  public function depto () {
      return $this->hasMany(departamento::class,"id", "idDepartamento");
  }
}
