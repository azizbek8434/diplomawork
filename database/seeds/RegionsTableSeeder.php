<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
            'name' => 'Фарғона тумани',
            'slug' => 'farg-ona-tumani',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
                'name' => 'Боғдод тумани',
                'slug' => 'bog-dod-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Бешариқ тумани',
                'slug' => 'besharik-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Бувайда тумани',
                'slug' => 'buvayda-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Данғара тумани',
                'slug' => 'dang-ara-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Ёзовон тумани',
                'slug' => 'yozovon-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Қўштепа тумани',
                'slug' => 'k-ushtepa-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Қува тумани',
                'slug' => 'k-uva-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Риштон тумани',
                'slug' => 'rishton-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Олтариқ тумани',
                'slug' => 'oltarik-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Тошлоқ тумани',
                'slug' => 'toshlok-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Ўзбекистон тумани',
                'slug' => 'uzbekiston-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Фурқат тумани',
                'slug' => 'furk-at-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Учкўрик тумани',
                'slug' => 'uchkurik-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Сўҳ тумани',
                'slug' => 'sukh-tumani',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Фарғона шахар',
                'slug' => 'farg-ona-shahar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Қувасой шахар',
                'slug' => 'k-uvasoy-shahar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Қўқон шахар',
                'slug' => 'k-uk-on-shahar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Марғилон шахар',
                'slug' => 'marg-ilon-shahar',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]

        ]);
    }
}



