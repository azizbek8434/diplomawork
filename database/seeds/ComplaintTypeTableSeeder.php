<?php

use App\ComplaintType;
use Illuminate\Support\Str;
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
            'slug' => Str::slug('Аҳоли'),
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Таълим муассасалари', // id = 2
            'slug' => Str::slug('Таълим муассасалари'),
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маданий муассасалар', // id = 3
            'slug' => Str::slug('Маданий муассасалар'),
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маиший хизмат уйлари',  // id = 4
            'slug' => Str::slug('Маиший хизмат уйлари'),
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Тиббиёт муассасалари',  // id = 5
            'slug' => Str::slug('Тиббиёт муассасалари'),
            'parent_id' => null
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Аҳоли сони',
            'slug' => Str::slug('Аҳоли сони'),
            'parent_id' => 1,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Шаҳар аҳолиси сони',
            'slug' => Str::slug('Шаҳар аҳолиси сони'),
            'parent_id' => 1,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Мактабгача тарбия муассасалари сони',
            'slug' => Str::slug('Мактабгача тарбия муассасалари сони'),
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Коллеж ва лицейлар сони',
            'slug' => Str::slug('Коллеж ва лицейлар сони'),
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Олий ўқув юртлари сони',
            'slug' => Str::slug('Олий ўқув юртлари сони'),
            'parent_id' => 2,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Театр сони',
            'slug' => Str::slug('Театр сони'),
            'parent_id' => 3,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Кинотеатр сони',
            'slug' => Str::slug('Кинотеатр сони'),
            'parent_id' => 3,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Меҳмонхона сони',
            'slug' => Str::slug('Меҳмонхона сони'),
            'parent_id' => 4,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Маиший хизмат уйи сони',
            'slug' => Str::slug('Маиший хизмат уйи сони'),
            'parent_id' => 4,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Шифохона сони',
            'slug' => Str::slug('Шифохона сони'),
            'parent_id' => 5,
        ]);
        factory(ComplaintType::class)->create([
            'name' => 'Оилавий поликлиника сони',
            'slug' => Str::slug('Оилавий поликлиника сони'),
            'parent_id' => 5,
        ]);
        factory('App\ComplaintType', 20)->create();
    }
}