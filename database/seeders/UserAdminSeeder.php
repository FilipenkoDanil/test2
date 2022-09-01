<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'user']);
        $role = Role::create(['name' => 'admin']);
        $user = User::create([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('123123123')
        ]);

        $user->assignRole($role);
    }
}
