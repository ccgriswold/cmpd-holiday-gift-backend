<?php

use Illuminate\Database\Seeder;

class HouseholdPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HouseholdPhone::class, 60)->create()->each(function($u) {
            // Do nothing inside...
        });
    }
}
