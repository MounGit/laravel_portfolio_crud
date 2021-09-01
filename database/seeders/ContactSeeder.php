<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indexcontacts')->insert([
            "location" => "A108 Adam Street, New York, NY 535022",
            "mail" => "info@example.com",
            "number" => "+1 5589 55488 55s"
        ]);
    }
}
