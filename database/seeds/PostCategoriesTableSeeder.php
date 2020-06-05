<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('post_categories')->insert([
            'name' => 'Object Oriented'   
        ]);
         DB::table('post_categories')->insert([
            'name' => 'Script Language'   
        ]);
         DB::table('post_categories')->insert([
            'name' => 'Python',
            'sub_category'=>1    
        ]);
        DB::table('post_categories')->insert([
            'name' => 'Php',
            'sub_category'=>1    
        ]);
        DB::table('post_categories')->insert([
            'name' => 'javaScript',
            'sub_category'=>2    
        ]);
    }
}
