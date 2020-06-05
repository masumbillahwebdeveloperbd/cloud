<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CourseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('course_categories')->insert([
            'name' => 'WEB DESIGN & DEVELOPMENT'   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'SYSTEM & SERVER'   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'SMART APPS DEVELOPMENT'   
        ]);
          DB::table('course_categories')->insert([
            'name' => 'CLOUD COMPUTING'   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'GRAPHICS DESIGN'   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'PROGRAMMING'   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'Php Advance With Laravel Framework',
            'sub_category'=>1   
        ]);
         DB::table('course_categories')->insert([
            'name' => 'Php .Net(MVC),C# With SQL-Server ',
            'sub_category'=>1   
        ]);
          DB::table('course_categories')->insert([
            'name' => 'Android Apps Development',
            'sub_category'=>3   
        ]);
           DB::table('course_categories')->insert([
            'name' => 'C Programming',
            'sub_category'=>6   
        ]);
    }
}
