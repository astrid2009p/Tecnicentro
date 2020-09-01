<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    protected $table = 'telefono';
    public $timestamps = true;
    protected $fillable = ['idCliente','telefono'];

  protected $hidden = [
    'id',
  ];

  public function cliente () {
    return $this->belongsTo(cliente::class, 'id', 'idCliente');
  }


}
