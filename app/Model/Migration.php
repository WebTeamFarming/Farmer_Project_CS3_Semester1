<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    protected $fillable = ['id', 'migration', 'batch'];
}