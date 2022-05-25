<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WinemakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('winemakers')->insert([
            'first_name'=>'Jean',
            'last_name'=>'Jacque',
            'phone_number'=>'078 999 999',
            'adress'=>'Avenue de la Rochelle 10',
            'city'=>'Bex',
            'locality'=>'1880',
            'country'=> 'Suisse',
            'domain_name' =>'cave des amis',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);

        DB::table('winemakers')->insert([
            'first_name'=>'mattieu',
            'last_name'=>'paul',
            'phone_number'=>'079 999 999',
            'adress'=>'Rue du grand vigneron 25',
            'city'=>'Martigny',
            'locality'=>'1920',
            'country'=> 'Suisse',
            'domain_name' =>'cave de la fammille',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);

        DB::table('winemakers')->insert([
            'first_name'=>'pierre',
            'last_name'=>'duJardi',
            'phone_number'=>'+ 33 079 999 999',
            'adress'=>'chemin du vigneron 75',
            'city'=>'Caen',
            'locality'=>'14118',
            'country'=> 'France',
            'domain_name' =>'cave de lartiste',
            'created_at'=>'2022-05-17',
            'updated_at'=>'2022-05-17',
        ]);
    }
}
