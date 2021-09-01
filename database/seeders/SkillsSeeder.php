<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indexskills')->insert([
            [
                "skill" => "HTML",
                "val" => "100"
            ],
            [
                "skill" => "CSS",
                "val" => "90"
            ],
            [
                "skill" => "JavaScript",
                "val" => "75"
            ],
            [
                "skill" => "PHP",
                "val" => "80"
            ],
            [
                "skill" => "WordPress/CMS",
                "val" => "90"
            ],
            [
                "skill" => "Photoshop",
                "val" => "55"
            ]
        ]);
    }
}
