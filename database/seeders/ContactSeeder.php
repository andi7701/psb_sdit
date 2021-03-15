<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contact::create([
            'email' => 'test@gmail.com',
            'phone' => '072180097',
            'phone2' => '085276654332'
        ]);
    }
}
