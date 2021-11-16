<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
    }
}
