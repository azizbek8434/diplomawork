<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller 
{
    public function update(Request $request)
    {
        
        $region = 'oltarik-tumani';
        $count = '10';
        if ($region && $count) {
        foreach(config('adminlte.menu') as $key => $value){
            if(is_array($value) && $value['can'] == $region){
                $value['label'] = $count;
                dump($value);
            }
        }
        }
        $fp = fopen(base_path() . '/config/adminlte.php', 'w');
        fwrite($fp, '<?php return ' . var_export(config('adminlte'), true) . ';');
        fclose($fp);
        \Artisan::call('config:cache');
        dd('done');
    }
}