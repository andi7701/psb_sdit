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
        //
        $admin = User::create([
            'name' => 'Admin SDB',
            'email' => 'admin@sdb.test',
            'password' => bcrypt('secret123'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User SDB',
            'email' => 'user@sdb.test',
            'password' => bcrypt('secret123'),
        ]);

        $user->assignRole('user');
    }
}
