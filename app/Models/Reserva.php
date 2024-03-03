<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = ['usuario_id', 'experiencia_id', 'fecha_reserva', 'estado'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function experiencia()
    {
        return $this->belongsTo('App\Experiencia');
    }
}
