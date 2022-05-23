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

        $usuario = User::create([
            'name' => 'Guille',
            'email' => 'guillermola40@educastur.es',
            'email_verified_at' => now(),
            'password' => Hash::make('guille')
        ]);
        $usuario->assignRole('admin');
        
        \App\Models\User::factory(9)->create();
        $this->seedRelationRolesUser();
    }

    public function seedRelationRolesUser()
    {
        $users = \App\Models\User::all();
        foreach ($users as $user) {
            if ($user!=\App\Models\User::find(1)) {
                $user->assignRole('free');
            }
        }
    }
}
