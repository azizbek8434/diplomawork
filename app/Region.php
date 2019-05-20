<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Region extends Model
{
    protected $fillable = [
        'name', 
        'slug'
    ];
    
    public function getRouteKeyName()
	{
		return 'slug';
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
	}
}