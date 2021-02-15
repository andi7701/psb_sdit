<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name' => 'Admin SDB',
            'email' => 'admin@sdb.test',
            'role' => 'Admin',
            'password' => bcrypt('secret123'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        $admin->assignRole('Admin');
    }
}
