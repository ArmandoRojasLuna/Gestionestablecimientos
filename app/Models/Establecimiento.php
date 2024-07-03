<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    protected $table = 'establecimientos';

    protected $fillable = ['nombre', 'direccion', 'tipo', 'responsable_id'];

    // Definición de la relación
    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_id');
    }
}
