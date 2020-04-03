<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_merc extends Model
{
  protected $table = 'cliente_merc';
  protected $primarykey = 'id';
  public $timestamps = false;

  protected $fillable = [
    'cli_merc',
    'ani_ant',
    'ani_act'
  ];

  protected $guarded=[

  ];
}
