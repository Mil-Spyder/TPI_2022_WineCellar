<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GrapeVarietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        'DB'::table('grape_varieties')->insert([
            'label'=>'pinot noir',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);

        'DB'::table('grape_varieties')->insert([
            'label'=>'riesling blanc',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);

        'DB'::table('grape_varieties')->insert([
            'label'=>'Sauvignon blanc',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        'DB'::table('grape_varieties')->insert([
            'label'=>'Syrah noir',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        'DB'::table('grape_varieties')->insert([
            'label'=>'Viognier blanc',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        'DB'::table('grape_varieties')->insert([
            'label'=>' Chardonnay',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        'DB'::table('grape_varieties')->insert([
            'label'=>' Merlot',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);


    }
}
