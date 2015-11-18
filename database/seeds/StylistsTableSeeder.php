<?php

use Illuminate\Database\Seeder;

class StylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Stylist::class, 1)->create();
    }
}