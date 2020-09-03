<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientedireccion extends Model
{
    public $timestamps = true;
    protected $table = 'clientedireccion';

    protected $fillable = ['id','idEmpresa','idCliente','idDireccion'];

    public function cliente () {
        return $this->belongsToMany(cliente::class, 'id', 'idCliente');
    }
  
    public function direccion () {
        return $this->belongsToMany(direccion::class, 'id', 'idDireccion');
    }
}
