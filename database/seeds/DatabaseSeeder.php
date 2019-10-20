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
        User::firstOrCreate(['email' => 'mudar@email.com'], [
            'name' => 'Admin',
            'is_admin' => 1,
            'password' => Hash::make('asdf456'),
        ]);
    }
}
