<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bundes extends Model
{
    protected $table = "bundes";

    protected $fillable = [
        'name',
        'text',
    ];
}
