<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avances extends Model
{
    use HasFactory;
    protected $fillable = ['username','date','avence','id_utidient'];
}
