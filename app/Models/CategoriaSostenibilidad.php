<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSostenibilidad extends Model
{
    protected $fillable = ['nombre_categoria'];
    public function experiencias()
    {
        return $this->belongsToMany('App\Experiencia', 'experiencias_categorias', 'categoria_id', 'experiencia_id');
    }
    use HasFactory;
}
