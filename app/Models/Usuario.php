<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios'; // Asegura que el modelo use la tabla 'usuarios'

    protected $fillable = [
        'nombre', 'correo', 'contraseña', 'is_admin',
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    // Este método es necesario si Laravel intenta hacer hashing de la contraseña automáticamente
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Este método es útil si implementas la verificación de email
    public function getEmailForVerification()
    {
        return $this->correo;
    }

    /**
     * Determina si el usuario es administrador.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }

    // Relaciones con otros modelos
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function resenas()
    {
        return $this->hasMany(Resena::class);
    }
}
