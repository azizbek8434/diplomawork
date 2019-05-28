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
        $user2 = \App\User::create([
            'name' => 'Usulidin',
            'email' => 'ucer@ucer.com',
            'region_id' => 15,
            'email_verified_at' => now(),
            'password' => bcrypt('secret123'),
            'remember_token' => Str::random(10),
        ]);
        $user2->assignRole('admin');
        $ins = \App\User::create([
            'name' => 'Inspector',
            'email' => 'ins@ins.com',
            'region_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins->assignRole('Inspector');
        $ins2 = \App\User::create([
            'name' => 'Inspector2',
            'email' => 'ins2@ins.com',
            'region_id' => 2,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins2->assignRole('Inspector');
        $ins3 = \App\User::create([
            'name' => 'Inspector3',
            'email' => 'ins3@ins.com',
            'region_id' => 3,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins3->assignRole('Inspector');
        $ins4 = \App\User::create([
            'name' => 'Inspector4',
            'email' => 'ins4@ins.com',
            'region_id' => 4,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins4->assignRole('Inspector');
    }
}