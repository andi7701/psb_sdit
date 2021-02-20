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
            'email' => 'pr@darmabangsa.sch.id',
            'phone' => '0721-700931',
            'phone2' => '0852-6637-3559'
        ]);
    }
}
