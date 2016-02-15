<?php

use Illuminate\Database\Seeder;

class HouseholdAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HouseholdAddress::class, 61)->create()->each(function($u) {
            // Do nothing inside...
        });
    }
}
