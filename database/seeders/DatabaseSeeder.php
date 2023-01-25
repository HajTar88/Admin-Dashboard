<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        \App\Models\Hospital::factory()->create(
            ['hospital_code'=> 1,
            'hospital_name'=> 'Main_Hospital',
            'hospital_address'=> "",
            'phone'=> '09090909',
            'password'=>"123456789"]
        );
    }
}
