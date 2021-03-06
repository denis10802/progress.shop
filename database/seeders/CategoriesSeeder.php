<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 5; $i++)
        DB::table('categories')->insert([
            'title' => 'Category '.$i,
            'slug' => 'Category_'.$i,
        ]);
    }
}
