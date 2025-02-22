<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacion extends Model
{
    use HasFactory;

    protected $table = 'comunicaciones';

    protected $fillable = ['titulo', 'mensaje', 'fechaEnvio'];
}
