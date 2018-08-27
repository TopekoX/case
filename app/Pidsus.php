<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pidsus extends Model
{
  protected $table = 'pidsus';

  protected $guarded = ['id', 'created_at', 'updated_at'];
}
