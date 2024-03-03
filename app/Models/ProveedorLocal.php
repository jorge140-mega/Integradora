<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProveedorLocal extends Model
{
    protected $fillable = ['nombre', 'ubicacion', 'contacto'];


    public function experiencias()
    {
        return $this->hasMany('App\Experiencia');
    }
    use HasFactory;
}
