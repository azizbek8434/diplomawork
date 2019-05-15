<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

    $permissions = [

        'farg-ona-tumani',
        'bog-dod-tumani',
        'besharik-tumani',
        'buvayda-tumani',
        'dang-ara-tumani',
        'yozovon-tumani',
        'k-ushtepa-tumani',
        'k-uva-tumani',
        'rishton-tumani',
        'oltarik-tumani',
        'toshlok-tumani',
        'uzbekiston-tumani',
        'furk-at-tumani',
        'uchkurik-tumani',
        'sukh-tumani',
        'farg-ona-shahar',
        'k-uvasoy-shahar',
        'k-uk-on-shahar',
        'marg-ilon-shahar',
        'role-list',
        'perm-list',
        'user-list', 
        'settings-list',
        'default-list'
        ];

        foreach ($permissions as $permission) {
            $permission = Permission::create(['name' => $permission]);
       }

        $role = Role::find(1);
        $role->givePermissionTo(Permission::all());
        $role = Role::find(2);
        $role->givePermissionTo(['default-list']);
    }
}
