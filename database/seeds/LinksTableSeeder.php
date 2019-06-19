<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            [
                'image' => 'client-1.png',
                'url' => 'https://data.gov.uz/',
                'title' => 'Ўзбекистон Республикаси очиқ маълумотлар базаси',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => 'client-2.png',
                'url' => 'https://strategy.uz/',
                'title' => 'Тараққиёт стратегияси маркази',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => 'client-3.png',
                'url' => 'https://my.gov.uz/uz',
                'title' => 'Ягона интерактив давлат хизматлари портали',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => 'client-4.png',
                'url' => 'http://lex.uz/',
                'title' => 'Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'url' => 'http://www.prokuratura.uz',
                'image' => 'client-5.png',
                'title' => 'Ўзбекистон Республикаси Бош прокуратураси',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => 'client-6.png',
                'url' => 'https://president.uz/oz',
                'title' => 'Ўзбекистон Республикаси Президентининг расмий веб-сайти',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'image' => 'client-7.png',
                'url' => 'https://gov.uz/uz',
                'title' => 'Ўзбекистон Республикаси Ҳукумат портали',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'url' => 'https://id.gov.uz/',
                'image' => 'client-8.png',
                'title' => 'Ягона идентификация тизими',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}