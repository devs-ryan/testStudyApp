<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Test::create([
            'id' => 1,
            'name' => 'Alberta Drivers License - Learners Permit',
            'number_of_questions' => 30,
            'number_required_to_pass' => 25,
            'description' => null,
            'created_at' => '2021-12-19 17:51:00',
            'updated_at' => '2021-12-19 17:51:00',
        ]);
    }
}
