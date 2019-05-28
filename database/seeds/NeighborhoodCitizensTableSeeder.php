<?php

use App\NeighborhoodCitizen;
use Illuminate\Database\Seeder;

class NeighborhoodCitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $neighborhoods = [
            'Самарқанд МФЙ' => '1',
            'Пахтаобод МФЙ' => '1',
            'Мирзаобод МФЙ' => '2',
            'Юқори Мизаобод МФЙ' => '2',
            'Самандарак МФЙ' => '2',
            'Конизар МФЙ' => '3',
            'Шўроқер МФЙ' => '3',
            'Майлавой МФЙ' => '4',
            'Мехнатобод МФЙ' => '4',
            'Бағдод-2 МФЙ' => '5',
            'Қўшчинор МФЙ' => '5',
            'Саховат МФЙ' => '6',
            'Қашқари МФЙ' => '6',
            'Мурувват МФЙ' => '7',
            'Саидобод МФЙ' => '7',
            'Жилва МФЙ' => '8',
            'Хўжаобод МФЙ' => '8',
            'Хакимтўра МФЙ' => '9',
            'Урганжи МФЙ' => '9',
            'Қум МФЙ' => '10',
            'Бештерак МФЙ' => '10',
            'Шодлик МФЙ' => '11',
            'Араб МФЙ' => '11',
            'Турк МФЙ' => '12',
            'Шўрқишлоқ МФЙ' => '12',
            'Янгихаёт МФЙ' => '13',
            'Тўлабой МФЙ' => '13',
            'Катта Ганжиравон МФЙ' => '14',
            'Манғит МФЙ' => '14',
            'Сойшилдир МФЙ' => '15',
            'Санам МФЙ' => '15',
            'Оқтепа МФЙ' => '16',
            'Шопўлат МФЙ' => '16',
            'Увайсий МФЙ' => '17',
            'Олтиқўш МФЙ' => '17',
            'Қоракўрпа МФЙ' => '18',
            'Телиминг МФЙ' => '18',
            'Чинобод МФЙ' => '19',
            'Олтинобод МФЙ' => '19'
        ];
        foreach($neighborhoods as $key => $value ){
            factory(NeighborhoodCitizen::class)->create([
                'name' => $key,
                'region_id' => $value
            ]);
        }
        factory('App\NeighborhoodCitizen', 20)->create();
        }
}