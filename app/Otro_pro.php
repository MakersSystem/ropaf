<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otro_pro extends Model
{
  protected $table = 'otro_pro';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'pro',
    'pro_anu',
    'can_ent',
    'can_ven',
    'pre_pro'
  ];

  protected $guarded=[

  ];
}
