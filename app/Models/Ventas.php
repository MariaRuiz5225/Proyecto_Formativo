<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ventas',
        'fecha'
    ];
}
