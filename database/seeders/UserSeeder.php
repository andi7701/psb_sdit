<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        $admin->assignRole('Admin');

        $user = User::create([
            'name' => 'User SDB',
            'email' => 'user@sdb.test',
            'role' => 'User',
            'password' => bcrypt('secret123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'tahun_ajarans' => Carbon::now()->year,
            'status' => 'Register' // Register/Payment/Re-Payment/Success
        ]);

        $user->assignRole('User');
    }
}
