<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economico extends Model
{
  protected $table = 'economico';
  protected $primarykey = 'id';
  public $timestamps = true;

  protected $fillable = [
    'apoya_ins',
    'satis_org'
  ];

  protected $guarded=[

  ];
}
