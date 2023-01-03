<?php

namespace Database\Seeders;

use App\Models\User;
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
        return User::create([
            'name' => 'nubefa',
            'email' =>'nubefa@nubefa.com',
            'password' => bcrypt('nubefa369'),
        ]);
    }
}
