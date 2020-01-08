<?php

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
        \Illuminate\Support\Facades\DB::table('rooms')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        factory(\App\User::class, 10)->create();
        factory(\App\Room::class, 6)->create();
    }
}
