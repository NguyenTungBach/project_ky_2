<?php

namespace Database\Seeders;

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
//        $this->call(CategorySeeder::class);
//        $this->call(ProductSeeder::class);
//        $this->call(FarmSeed::class);
//        $this->call(BlogSeeder::class);
        $this->call(BlogFarmSeed::class);
    }
}
