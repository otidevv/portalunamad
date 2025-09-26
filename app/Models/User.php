<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'apellido_paterno',
        'apellido_materno',
        'email',
        'password',
        'tipo_documento',
        'numero_documento',
        'fecha_nacimiento',
        'rol',
        'estado',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'estado' => 'boolean',
            'fecha_nacimiento' => 'date',
        ];
    }

    /**
     * Get the avatar URL attribute
     */
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }

        // Generate avatar placeholder based on name initials
        $fullName = trim($this->name . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno);
        $initials = collect(explode(' ', $fullName))
            ->map(fn ($word) => strtoupper(substr($word, 0, 1)))
            ->take(2)
            ->join('');

        return 'https://ui-avatars.com/api/?name=' . urlencode($initials) . '&color=ffffff&background=db0455&size=150';
    }

    /**
     * Get tipo documento label
     */
    public function getTipoDocumentoLabelAttribute()
    {
        $tipos = [
            'dni' => 'DNI',
            'carnet_extranjeria' => 'Carnet de Extranjería',
            'pasaporte' => 'Pasaporte',
            'cedula' => 'Cédula de Identidad',
        ];

        return $tipos[$this->tipo_documento] ?? 'No especificado';
    }

    /**
     * Get rol label
     */
    public function getRolLabelAttribute()
    {
        $roles = [
            'admin' => 'Administrador',
            'editor' => 'Editor',
            'usuario' => 'Usuario',
            'moderador' => 'Moderador',
        ];

        return $roles[$this->rol] ?? 'Usuario';
    }

    /**
     * Scope for active users
     */
    public function scopeActivos($query)
    {
        return $query->where('estado', true);
    }

    /**
     * Scope for inactive users
     */
    public function scopeInactivos($query)
    {
        return $query->where('estado', false);
    }

    /**
     * Check if user has a specific role
     */
    public function hasRole($role)
    {
        return $this->rol === $role;
    }

    /**
     * Check if user is admin
     */
    public function isAdmin()
    {
        return $this->rol === 'admin';
    }

    /**
     * Check if user is active
     */
    public function isActive()
    {
        return $this->estado;
    }

    /**
     * Get the user's anuncios
     */
    public function anuncios()
    {
        return $this->hasMany(\App\Models\Anuncio::class);
    }

    /**
     * Get the user's comunicados
     */
    public function comunicados()
    {
        return $this->hasMany(\App\Models\Comunicado::class);
    }
}
