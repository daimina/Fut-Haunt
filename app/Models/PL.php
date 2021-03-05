<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PL extends Model
{
    protected $table = "pl";

    protected $fillable = [
        'name',
        'text',
    ];
}
