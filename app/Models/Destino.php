<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = ['nombre_destino','descripcion','latitud','longitud','biodiversidad','patrimonio_cultural'];

    public function experiencias()
    {
        return $this->hasMany('App\Experiencia');
    }

    public function resenas()
    {
        return $this->hasMany('App\Resena');
    }
    use HasFactory;

}
