<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Juan David ',
            'apellido' => 'Bravo',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
            'numero_documento' => '11013131',
            'tipo_documento' => 'cedula',
            'fecha_nacimiento' => '23/4/2020',
            'telefono' => '387438',
            'genero' => 'm'


        ])->assignRole('Coordinador');

        User::factory(20)->create();
    }
}
