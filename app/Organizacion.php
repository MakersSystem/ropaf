<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
  protected $table = 'organizacion';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'nombre',
    'sigla',
    'departamento',
    'provincia',
    'municipio',
    'representante',
    'direccion',
    'telefono',
    'correo',
    'organizacion',
    'nivel',
    'nro_comunidades',
    'latitud',
    'longitud'
  ];

  protected $guarded=[

  ];
}
