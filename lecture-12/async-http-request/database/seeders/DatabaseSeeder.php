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
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        \App\Models\ContactInfo::create([
            "phone" => "+995 590 00 00 00",
            "email" => "test@example.com",
            "country" => "Georgia",
            "city" => "Tbilisi",
            "street" => "Some street #5",
            "type" => "shipping",
            "user_id" => 1,
        ]);
        \App\Models\ContactInfo::create([
            "phone" => "+995 590 00 00 00",
            "email" => "test2@example.com",
            "country" => "Georgia",
            "city" => "Gori",
            "street" => "Some Other #5",
            "type" => "billing",
            "user_id" => 1,
        ]);
    }
}
