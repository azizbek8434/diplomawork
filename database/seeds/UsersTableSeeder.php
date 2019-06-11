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
        $ins5 = \App\User::create([
            'name' => 'Inspector2',
            'email' => 'ins5@ins.com',
            'region_id' => 5,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins5->assignRole('Inspector');
        $ins6 = \App\User::create([
            'name' => 'Inspector3',
            'email' => 'ins6@ins.com',
            'region_id' => 6,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins6->assignRole('Inspector');
        $ins7 = \App\User::create([
            'name' => 'Inspector7',
            'email' => 'ins7@ins.com',
            'region_id' => 7,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins7->assignRole('Inspector');
        $ins8 = \App\User::create([
            'name' => 'Inspector8',
            'email' => 'ins8@ins.com',
            'region_id' => 8,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins8->assignRole('Inspector');
        $ins9 = \App\User::create([
            'name' => 'Inspector9',
            'email' => 'ins9@ins.com',
            'region_id' => 9,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins9->assignRole('Inspector');
        $ins10 = \App\User::create([
            'name' => 'Inspector10',
            'email' => 'ins10@ins.com',
            'region_id' => 10,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins10->assignRole('Inspector');
        $ins11 = \App\User::create([
            'name' => 'Inspector11',
            'email' => 'ins11@ins.com',
            'region_id' => 11,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins11->assignRole('Inspector');
        $ins12 = \App\User::create([
            'name' => 'Inspector12',
            'email' => 'ins12@ins.com',
            'region_id' => 12,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins12->assignRole('Inspector');
        $ins13 = \App\User::create([
            'name' => 'Inspector13',
            'email' => 'ins13@ins.com',
            'region_id' => 13,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins13->assignRole('Inspector');
        $ins14 = \App\User::create([
            'name' => 'Inspector14',
            'email' => 'ins14@ins.com',
            'region_id' => 14,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins14->assignRole('Inspector');
        $ins15 = \App\User::create([
            'name' => 'Inspector15',
            'email' => 'ins15@ins.com',
            'region_id' => 15,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins15->assignRole('Inspector');
        $ins16 = \App\User::create([
            'name' => 'Inspector16',
            'email' => 'ins16@ins.com',
            'region_id' => 16,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins16->assignRole('Inspector');
        $ins17 = \App\User::create([
            'name' => 'Inspector17',
            'email' => 'ins17@ins.com',
            'region_id' => 17,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins17->assignRole('Inspector');
        $ins18 = \App\User::create([
            'name' => 'Inspector18',
            'email' => 'ins18@ins.com',
            'region_id' => 18,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins18->assignRole('Inspector');
        $ins19 = \App\User::create([
            'name' => 'Inspector19',
            'email' => 'ins19@ins.com',
            'region_id' => 19,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ]);
        $ins19->assignRole('Inspector');
    }
}