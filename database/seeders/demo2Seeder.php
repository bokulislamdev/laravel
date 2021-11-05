<?php

namespace Database\Seeders;
use App\Models\demo2;
use Illuminate\Database\Seeder;

class demo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        demo2::factory()->count(20)->create();
    }
}
