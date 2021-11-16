<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Academia;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new User();
        $user->name = 'Theizer';
        $user->lastname = 'Gonzalez';
        $user->username = 'tgonzalez';
        $user->email = 'tgonzalez@mail.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('admin123');
        $user->status = 1;
        $user->save();

        $user->assignRole('Super Administrador');





        $academia =new Academia();
        $academia->name       = 'Lzpacademy';
        $academia->direccion  = 'Caracas - Venezuela';
        $academia->telefono   = '+58 000-0000000';
        $academia->email      = 'correo@mail.com';
        $academia->logo       = 'logo-principal.png';
        $academia->save();

        //$academia->assignRole('Super Administrador');
    }
}
