<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    protected $guarded = ['id'];
    protected $table = 'devices';
}
