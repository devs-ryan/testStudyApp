<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EasyAdminImageSeeder::class);

        $this->call(TestSeeder::class);

        $this->call(QuestionSeeder::class);

        $this->call(AnswerSeeder::class);

        User::create([
            'name' => 'admin',
            'email' => 'rclaxton.dev@gmail.com',
            'is_easy_admin' => true,
            'password' => Hash::make(env('ADMIN_PASSWORD', 'secret'))
        ]);
    }
}
