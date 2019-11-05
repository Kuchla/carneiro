<?php

use App\User;
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
        User::firstOrCreate(['email' => 'email1@email.com'], [
            'name' => 'Admin 1',
            'is_admin' => 1,
            'password' => Hash::make('@sdf456'),
        ]);

        User::firstOrCreate(['email' => 'email2@email.com'], [
            'name' => 'Admin 2',
            'is_admin' => 1,
            'password' => Hash::make('c@cilds46'),
        ]);
    }
}
