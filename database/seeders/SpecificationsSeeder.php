<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 11; $i++)
        DB::table('specifications')->insert([
            'product_id'=>rand(1,11),
            'name_param'=>'Specification_'.$i,
            'param'=>rand(10,1111),

        ]);
    }
}
