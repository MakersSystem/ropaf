<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $table = 'beneficio';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'cant_muj',
      'cant_var',
      'espe',
      'pro_eco'
    ];

    protected $guarded=[

    ];
}
