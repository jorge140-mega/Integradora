<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    protected $fillable =['nombre_destino','descripcion','latitud','longitud','biodiversidad','patrimonio_cultural'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function destino()
    {
        return $this->belongsTo('App\Destino');
    }
    use HasFactory;
}
