<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador', 
            'description' => '', 
        ]);

        $empleado = Role::create([
            'name' => 'employee',
            'display_name' => 'Empleado', 
            'description' => '', 
        ]);

       
        User::factory(2)->create()->each(function ($user) use ($admin) {
            $user->roles()->attach($admin->id);
        });
        
        User::factory(10)->create()->each(function ($user) use ($empleado) {
            $user->roles()->attach($empleado->id);
        });
        
    }
}
