<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $usuarioAdmin = User::create([
            'name' => 'Guille',
            'email' => 'guillermola40@educastur.es',
            'email_verified_at' => now(),
            'password' => Hash::make('admin')
        ]);
        $usuarioAdmin->assignRole('admin');
        
        $usuarioPremium = User::create([
            'name' => 'Premium',
            'email' => 'premium@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('premium')
        ]);

        $usuarioPremium->assignRole('premium');

        User::create([
            'name' => 'Free',
            'email' => 'free@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('free')
        ]);


        \App\Models\User::factory(22)->create();
        $this->seedRelationRolesUser();
    }

    public function seedRelationRolesUser()
    {
        $users = \App\Models\User::all();
        foreach ($users as $user) {
            if ($user!=\App\Models\User::find(1)&&$user!=\App\Models\User::find(2)) {
                $user->assignRole('free');
            }
        }
    }
}
