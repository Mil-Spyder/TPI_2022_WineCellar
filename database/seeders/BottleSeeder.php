<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BottleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bottles')->insert([
            'appelation' => 'Mâcon-Vergisson',
            'cuvee_name' => 'Sur la Roche',
            'region' => 'Bourgogne',
            'vintage' => '2020',
            'unit' => '50',
            'capacity' => '75',
            'color' => 'Blanc',
            'consumable_date' => '2022',
            'peak_date' => '2027',
            'danger_date' => '2028',
            'description' => '
            Vignes plantées à une densité de 8 000 pieds à l’hectare. Contrôle des rendements, ébourgeonnage et effeuillage, culture respectueuse de l’environnement. Labour régulier permettant de révéler la typicité du terroir.
            Elevage de 8 mois en fûts de chêne sur lies fines (dont 25% de fûts neufs)
            Le nez est expressif et fruité (fruits exotiques, ananas). Il révèle des notes de fleurs blanches (lys, acacia) et minéral (craie). Sur ce terroir, le fruit cède la place à la minéralité sur une finale puissante et équilibrée. Un Mâcon d’un noble lignage, qui s’aura s’exprimer avec distinction en toute occasion.
            Vin pour l’apéritif, un buffet d’entrée, une terrine de poisson, un plateau de fruits de mer, des poissons grillés, et des fromages de chèvre.
            A servir entre 12 et 14°C',
            'culture_id' => '2',
            'winemaker_id' => '1',
            'grape_variety_id' => '6',
            'created_at' => '2022-05-17',
            'updated_at' => '2022-05-17',
        ]);

        DB::table('bottles')->insert([
            'appelation' => 'Castillon Côtes de Bordeaux',
            'cuvee_name' => 'L\'aurage',
            'region' => 'Bordeaux',
            'vintage' => '2019',
            'unit' => '0',
            'capacity' => '75',
            'color' => 'Rouge',
            'consumable_date' => '2024',
            'peak_date' => '2033',
            'danger_date' => '2034',
            'description' => 'L’appellation qui compte un grand nombre de vignerons engagés dans une démarche environnementale, dont 25% en bio/biodynamie, a toujours été précurseur dans la protection de la nature. (1ère appellation bordelaise à mettre en place une station de traitements des effluents vinicoles en 2002) 

            Les vignerons de Castillon Côtes de Bordeaux ont toujours préservé la biodiversité en respectant l’équilibre naturel entre zones boisées et parcelles de vigne.',
            'culture_id' => '5',
            'winemaker_id' => '2',
            'grape_variety_id' => '7',
            'created_at' => '2022-05-17',
            'updated_at' => '2022-05-17',
        ]);

        DB::table('bottles')->insert([
            'appelation' => 'Valais AOC',
            'cuvee_name' => 'CAVE DES PROMESSES',
            'region' => 'Valais',
            'vintage' => '2019',
            'unit' => '50',
            'capacity' => '75',
            'color' => 'Blanc',
            'consumable_date' => '2025',
            'peak_date' => '2036',
            'danger_date' => '2037',
            'description' => 'Encore un Johannisberg qui respire la
            fraîcheur tout en conservant une belle
            dose de gourmandise. Attaque croquante
            sur la pomme verte et la poire williams
            pour évoluer avec amplitude sur des notes
            de pêches jaunes et d’abricots. ',
            'culture_id' => '5',
            'winemaker_id' => '2',
            'grape_variety_id' => '6',
            'created_at' => '2022-05-17',
            'updated_at' => '2022-05-17',
        ]);

        DB::table('bottles')->insert([
            'appelation' => 'Valais AOC',
            'cuvee_name' => 'PROMESSES D\'HARMONIE',
            'region' => 'Valais',
            'vintage' => '2019',
            'unit' => '1',
            'capacity' => '75',
            'color' => 'Rouge',
            'consumable_date' => '2025',
            'peak_date' => '2036',
            'danger_date' => '2037',
            'description' => 'Un vin qui s’invite à toutes les occasions
            tellement le fruit est frais, digeste et
            flatteur. Répertoire de petites baies noires
            juteuses avec ces notes habituelles
            d’épices douces entre girofle et poivre. ',
            'culture_id' => '5',
            'winemaker_id' => '2',
            'grape_variety_id' => '7',
            'created_at' => '2022-05-17',
            'updated_at' => '2022-05-17',
        ]);
    }
}
