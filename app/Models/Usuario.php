<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre','correo','contraseña'];

    public function reservas()
    {
        return $this->hasMany('App/Reservas');
    }
    public function resenas()
    {
        return $this->hasMany('App/Resemas');
    }
    use HasFactory;
}
