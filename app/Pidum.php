<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pidum extends Model
{
    protected $table = 'pidum';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
