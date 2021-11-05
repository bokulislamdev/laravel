<?php

namespace Database\Seeders;
use App\Models\demo3;
use Illuminate\Database\Seeder;

class demo3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        demo3::factory()->count(20)->create();
    }
}
