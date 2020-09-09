<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteVehiculo extends Model
{
  public $timestamps = false;
  protected $table = 'clientevehiculo';

  public function cliente () {
    return $this->belongsToMany(Cliente::class, 'id', 'idCliente');
}

  public function vehiculo () {
    return $this->belongsToMany(vehiculo::class, 'id', 'idVehiculo');
  }

  public function encabezado () {
    return $this->belongsTo(CotizacionEncabezado::class, 'id');
  }
}
