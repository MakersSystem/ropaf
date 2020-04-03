<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produ_eco extends Model
{
    //
    protected $table = 'produ_eco';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'pro_soc',
      'cer_soc',
      'sup_soc',
      'adju'
    ];

    protected $guarded=[

    ];
}
