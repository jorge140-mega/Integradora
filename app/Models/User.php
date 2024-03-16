<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios'; // Especifica el nombre de la tabla

    protected $fillable = [
        'nombre', 'correo', 'contraseña',
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Si planeas utilizar la verificación de email, deberías actualizar también esta parte.
    public function getEmailForVerification()
    {
        return $this->correo;
    }
}
