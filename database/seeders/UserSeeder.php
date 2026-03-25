<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario administrador de prueba
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@unamad.edu.pe',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
            'rol' => 'admin',
            'estado' => true,
        ]);

        // Crear usuarios adicionales de prueba
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'juan.perez@unamad.edu.pe',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
            'rol' => 'editor',
            'estado' => true,
        ]);

        User::create([
            'name' => 'María García',
            'email' => 'maria.garcia@unamad.edu.pe',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
            'rol' => 'moderador',
            'estado' => true,
        ]);
    }
}