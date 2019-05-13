<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Azizbek',
            'email' => 'admin@admin.com',
            'region_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('secret123'),
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('admin');
    }
}