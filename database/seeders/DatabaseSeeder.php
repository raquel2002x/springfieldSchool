<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         User::factory()->create([
            'name' => 'Bartolomew',
            'email' => 'bartolo@bartolo.com',
            'lastname' => 'Simpson',
            'img' =>'',
            'group' => 1,
            'isTeacher' => false
        ]);

         User::factory()->create([
            'name' => 'Lisa',
            'email' => 'lisa@empollona.com',
            'lastname' => 'Simpson',
            'img' =>'',
            'group' => 1,
            'isTeacher' => false
        ]);

         User::factory()->create([
            'name' => 'Ralph',
            'email' => 'yomellamo@ralph.com',
            'lastname' => 'Wigum',
            'img' =>'',
            'group' => 1,
            'isTeacher' => false
        ]);
    }
}
