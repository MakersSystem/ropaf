<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro_socio extends Model
{
    //
    protected $table = 'pro_socio';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'pro_sup',
      'pro_cul',
      'pro_rie'
    ];

    protected $guarded=[

    ];
}
