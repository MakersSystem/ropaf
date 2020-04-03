<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bene_event extends Model
{
    protected $table = 'bene_event';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'evento',
      'nro_soci'
    ];

    protected $guarded=[

    ];
}
