<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laliga extends Model
{
    protected $table = "laliga";

    protected $fillable = [
        'name',
        'text',
    ];
}
