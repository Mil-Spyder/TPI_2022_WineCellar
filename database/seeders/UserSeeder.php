<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username'=>'amateurVin',
            'email'=>'miliranp@gmail.com',
            'password'=>bcrypt('12345678'),
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
    }
}
