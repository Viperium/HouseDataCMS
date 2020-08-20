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
        // Import seeder
        $this->call(UsersTablesSeeder::class);
        $this->call(ListingSeeder::class);
    }
}
