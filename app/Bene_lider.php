<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bene_lider extends Model
{
  protected $table = 'bene_lider';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'gob_mun',
    'org_sim',
    'ong',
    'gob_dep',
    'lid_org',
    'otro'
  ];

  protected $guarded=[

  ];
}
