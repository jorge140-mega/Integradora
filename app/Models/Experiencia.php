<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $fillable = ['titulo','descripcion','destino_id','duracion','actividades','requisitos'];

    public function destino()
    {
        return $this->belongsTo('App\Destino');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\CategoriaSostenibilidad', 'experiencias_categorias', 'experiencia_id', 'categoria_id');
    }

    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }
    use HasFactory;
}
