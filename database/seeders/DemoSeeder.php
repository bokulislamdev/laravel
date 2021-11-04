<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seeders;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demoseed =[
            ["id" =>1, "name"=> "md bokul islam", "roll" => "1", "class" => "6", "status" => "1"],
            ["id" =>2, "name"=> "md naim", "roll" => "2", "class" => "7", "status" => "1"],
            ["id" =>3, "name"=> "md mokul", "roll" => "3", "class" => "8", "status" => "0"],
        ];
        Seeders::insert($demoseed);

    }
}
