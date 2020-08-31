<?php

use Illuminate\Database\Seeder;
use App\Address;
use App\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(Address::class,5)->create();
        factory(Country::class,5)->create();
    }
}
