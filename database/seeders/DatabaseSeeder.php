<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create the admin user
        User::create([
            'name' => 'Ghost User',
            'email' => 'this@mail.com',
            'password' => Hash::make('pluswad'),
            'role' => 'admin',
            'level' => 'admin',
            'registration_status' => true,
        ]);

        $this->command->info('Users table seeded.');
    }
}
