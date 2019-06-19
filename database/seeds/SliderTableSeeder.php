<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'image' => '1.jpg',
                'url' => '',
                'title' => '',
                'content' => 'Халқимиз ҳамма нарсадан устун қўядиган адолат туйғусини хаётимизда том маънода қарор
                топтириш - энг асосий вазифамизга айланиши шарт',
                'author' => 'Шавкат Мирзиёев',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => '2.jpg',
                'url' => 'http://www.prokuratura.uz',
                'title' => 'Ўзбекистон Республикаси Бош прокуратураси',
                'content' => '',
                'author' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => '3.jpg',
                'url' => '#',
                'title' => 'Ўзбекистон Республикаси Олий Мажлис Сенатида Бош Прокурорнинг ҳисоботи тингланди',
                'content' => '2019 йил 4 май куни Тошкент шаҳрида Ўзбекистон Республикаси Олий Мажлиси Сенатининг ўн тўққизинчи ялпи мажлисида сенаторлар Ўзбекистон Республикаси Бош прокурорининг ҳисоботини эшитдилар...',
                'author' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => '4.jpg',
                'url' => '#',
                'title' => 'Мирзиёев, Ўзбекистон-Жанубий Корея бизнес-форумида иштирок этмоқда',
                'content' => 'Ўзбекистон-Корея бизнес-форумининг очилиш маросимида Президентлар Шавкат Мирзиёев ва Ой-Жа-ин иштирок этишди. Ўзбекистон ва Жанубий Корея узоқ муддатли инвестиция ҳамкорлари. Ўзбекистон иқтисодиётига жалб қилинган корейс инвестицияларининг ҳажми 7 миллиард АҚШ долларидан ошди...',
                'author' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}