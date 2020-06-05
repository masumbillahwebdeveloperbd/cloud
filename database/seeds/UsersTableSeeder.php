<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Masum',
            'email'=>'masum@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone'=>'01719440550',
            'user_type'=>1,
        ]);
          DB::table('users')->insert([
            'name' => 'Maria',
            'email'=>'maria@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone'=>'01913507041',
            'user_type'=>2,
        ]);
           DB::table('users')->insert([
            'name' => 'Muhammad',
            'email'=>'muhammad@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone'=>'01913507041',
            'user_type'=>1,
        ]);
              DB::table('users')->insert([
            'name' => 'Zuyairiya',
            'email'=>'zuyairiya@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone'=>'01913507041',
            'user_type'=>2,
        ]);
    }
}
