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

        // $this->call(DemoSeeder::class);

        $this->call([
            demo2Seeder::class,
            demo3Seeder::class,
        ]);
    }
}
