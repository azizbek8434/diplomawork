<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
            'name' => 'Inspector',
            'guard_name' => 'web',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ],
            [
            'name' => 'User',
            'guard_name' => 'web',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ]
        ]);
    }
}