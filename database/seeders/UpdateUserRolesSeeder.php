<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UpdateUserRolesSeeder extends Seeder
{
    /**
     * Actualiza rol y estado de usuarios existentes sin modificar otros datos.
     */
    public function run(): void
    {
        $updates = [
            'admin@unamad.edu.pe' => ['rol' => 'admin', 'estado' => true],
            'juan.perez@unamad.edu.pe' => ['rol' => 'editor', 'estado' => true],
            'maria.garcia@unamad.edu.pe' => ['rol' => 'moderador', 'estado' => true],
            'apenam@unamad.edu.pe' => ['rol' => 'admin', 'estado' => true],
        ];

        foreach ($updates as $email => $data) {
            $updated = User::where('email', $email)->update($data);

            if ($updated) {
                $this->command->info("Actualizado: {$email} → rol:{$data['rol']}");
            } else {
                $this->command->warn("No encontrado: {$email}");
            }
        }
    }
}
