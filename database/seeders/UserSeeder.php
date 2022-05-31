<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data into user table
        DB::table('users')->insert([
                'name'=>'charuka sanda',
                'email'=>'san@gmail.com',
                'password'=>Hash::make('1234')

            ]);
    }
}
