<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produ_pecu extends Model
{
    //
    protected $table = 'produ_pecu';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'pro',
      'tot_ani',
      'ani_uti',
      'ani_nac',
      'pre_ani'
    ];

    protected $guarded=[

    ];
}
