<?php

namespace App\Traits;

trait UserPermissions
{
    /**
      * Get all user permissions.
      *
      * @return bool
      */
    public function getAllPermissionsAttribute()
    {
        // return $this->getAllPermissions();
    }

    /**
    * Get all user permissions in a flat array.
    *
    * @return array
    */
    public function getCanAttribute()
    {
        if (auth()->user() && $this->id === auth()->user()->id) {
            $lists = [
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
            $permissions = [];

            foreach ($lists as $permission) {
                if (auth()->user()->hasPermissionTo($permission)) {
                    $permissions[$permission] = true;
                } else {
                    $permissions[$permission] = false;
                }
            }
            return $permissions;
        }
    }
}