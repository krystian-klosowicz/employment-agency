<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
            [
                'name' => 'Przedstawiciele władz publicznych, wyżsi urzędnicy i kierownicy',
                'description' => 'grupa ta obejmuje zawody, w których podstawowymi zadaniami są: planowanie, określanie i realizowanie podstawowych celów i kierunków polityki państwa, formułowanie przepisów prawnych oraz kierowanie działalnością jednostek administracji publicznej.',
            ],
            [
                'name' => 'Specjaliści',
                'description' => 'grupa ta obejmuje zawody wymagające wysokiego poziomu wiedzy zawodowej, umiejętności oraz doświadczenia w zakresie: nauk technicznych, przyrodniczych, społecznych, humanistycznych i pokrewnych. ',
            ],
            [
                'name' => 'Technicy i inny średni personel',
                'description' => 'grupa ta obejmuje zawody wymagające posiadania wiedzy, umiejętności i doświadczenia niezbędnych do wykonywania głównie prac technicznych i podobnych, związanych z badaniem i stosowaniem naukowych oraz artystycznych koncepcji i metod działania.',
            ],
            [
                'name' => 'Pracownicy biurowi',
                'description' => 'grupa ta obejmuje zawody wymagające posiadania wiedzy, umiejętności i doświadczenia niezbędnych do zapisywania, organizowania, przechowywania i wyszukiwania informacji.',
            ],
            [
                'name' => 'Pracownicy usług i sprzedawcy',
                'description' => 'grupa ta obejmuje zawody wymagające wiedzy, umiejętności i doświadczenia, które są niezbędne do świadczenia usług ochrony, usług osobistych związanych między innymi z podróżą, prowadzeniem gospodarstwa.',
            ],
            [
                'name' => 'Rolnicy, ogrodnicy, leśnicy i rybacy',
                'description' => 'grupa ta obejmuje zawody wymagające wiedzy, umiejętności i doświadczenia niezbędnych do uprawy i zbioru ziemiopłodów, zbierania owoców lub roślin dziko rosnących, uprawy i eksploatacji lasów, chowu i hodowli zwierząt, połowów lub chowu i hodowli ryb.',
            ],
            [
                'name' => 'Robotnicy przemysłowi i rzemieślnicy',
                'description' => 'grupa ta obejmuje zawody wymagające wiedzy, umiejętności i doświadczenia niezbędnych do uzyskiwania i obróbki surowców.',
            ],
            [
                'name' => 'Operatorzy i monterzy maszyn i urządzeń',
                'description' => 'grupa ta obejmuje zawody wymagające wiedzy, umiejętności i doświadczenia niezbędnych do prowadzenia pojazdów i innego sprzętu ruchomego.',
            ],
            [
                'name' => 'Pracownicy wykonujący prace proste',
                'description' => 'grupa ta obejmuje zawody, które wymagają podstawowych umiejętności i wiedzy teoretycznej niezbędnych do wykonywania przeważnie prostych i rutynowych prac.',
            ],
            [
                'name' => 'Siły zbrojne',
                'description' => 'w grupie tej klasyfikowani są żołnierze zawodowi służby stałej i kontraktowej.',
            ]
        ]);
    }
}
