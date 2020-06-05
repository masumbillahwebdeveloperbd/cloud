<?php

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;


class ServiceCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('service_categories')->insert([
            'name' => 'SOFTWARE ORIENTED'   
        ]);
            DB::table('service_categories')->insert([
            'name' => 'SCHOOL MANAGEMENT'   
        ]);
            DB::table('service_categories')->insert([
            'name' => 'NETWORK & SERVER'   
        ]);
            DB::table('service_categories')->insert([
            'name' => 'GRAPHICS DESIGN'   
        ]);
            DB::table('service_categories')->insert([
            'name' => 'SUPPORT SERVICE'   
        ]);
    }
}
