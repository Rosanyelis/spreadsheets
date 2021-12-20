<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => Str::uuid(),
            'name' => 'AdminSystem',
            'email' => 'AdminSystem@gmail.com',
            'password' => bcrypt('AdminSystem'),
            'rol' => 'AdminSystem',
            'estatus' => 'Activo',
        ]);

        User::create([
            'id' => Str::uuid(),
            'name' => 'Maxil Knight',
            'email' => 'maxilspriggan@gmail.com',
            'password' => bcrypt('Certificados123*'),
            'rol' => 'Administrador',
            'estatus' => 'Activo',
        ]);
    }
}
