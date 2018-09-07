<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datun extends Model
{
  protected $table = 'datun';

  protected $guarded = ['id', 'created_at', 'updated_at'];
}
