<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ComplaintTypeTableSeeder::class);
        $this->call(NeighborhoodCitizensTableSeeder::class);
        $this->call(ComplaintTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        
    }
}