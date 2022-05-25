<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cultures')->insert([
            'label'=>'traditionnel',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        DB::table('cultures')->insert([
            'label'=>'raisonné',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        DB::table('cultures')->insert([
            'label'=>'bio',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',

        ]);
        DB::table('cultures')->insert([
            'label'=>'biodynamique',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
        DB::table('cultures')->insert([
            'label'=>'écologique',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);

        DB::table('cultures')->insert([
            'label'=>'nature',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
    }
}
