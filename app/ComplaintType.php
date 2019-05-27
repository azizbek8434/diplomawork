<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ComplaintType extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'position',
        'status'
    ];
    
    public function getRouteKeyName()
	{
		return 'slug';
    }

    public function scopeParents(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\ComplaintType', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\ComplaintType', 'parent_id');
    }
    
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
