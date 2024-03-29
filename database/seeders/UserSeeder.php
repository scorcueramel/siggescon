<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
             'name'=>'Alexandra Villena',
             'email'=>'admin@correo.com',
             'password'=> bcrypt('administrador')]
        )->assignRole('Admin');

        User::factory(9)->create();
    }
}
