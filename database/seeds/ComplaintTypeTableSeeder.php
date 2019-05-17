<?php

use App\ComplaintType;
use Illuminate\Database\Seeder;

class ComplaintTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ComplaintType::class)->create([
            'name' => 'Аҳоли', // id = 1
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Таълим муассасалари', // id = 2
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маданий муассасалар', // id = 3
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маиший хизмат уйлари ',  // id = 4
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Тиббиёт муассасалари ',  // id = 5
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Аҳоли сони',
            'parent_id' => 1,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Шаҳар аҳолиси сони',
            'parent_id' => 1,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Мактабгача тарбия муассасалари сони',
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Коллеж ва лицейлар сони',
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Олий ўқув юртлари сони',
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Театр сони',
            'parent_id' => 3,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Кинотеатр сони',
            'parent_id' => 3,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Меҳмонхона сони',
            'parent_id' => 4,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маиший хизмат уйи сони',
            'parent_id' => 4,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Шифохона сони',
            'parent_id' => 5,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Оилавий поликлиника сони',
            'parent_id' => 5,
        ]);
        factory('App\ComplaintType', 20)->create();
    }
}