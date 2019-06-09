<?php

namespace App;

use Illuminate\Support\Facades\DB;
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
    
    protected $appends = [
        'complaintCount'
    ];

    public function getRouteKeyName()
	{
		return 'slug';
    }

    public function scopeParents(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }

    public function scopeSubtypes(Builder $builder, $parent_id)
    {
        $builder->where('parent_id',$parent_id);
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
        
        if(request()->route()->parameter('region')->id)
            return $this->hasMany(Complaint::class)->where('region_id', request()->route()->parameter('region')->id);
            
        return $this->hasMany(Complaint::class);
    }

    public function childrenComplaints()
    {
        if(request()->route()->parameter('region')->id)
            return $this->hasManyThrough(Complaint::class, ComplaintType::class, 'parent_id')->where('region_id', request()->route()->parameter('region')->id);
        return $this->hasManyThrough(Complaint::class, ComplaintType::class, 'parent_id');
    }

    public function getComplaintCountAttribute()
    {
        if(request()->route()->parameter('region')->id)
            return $this->complaints(request()->route()->parameter('region')->id)->count() + $this->childrenComplaints(request()->route()->parameter('region')->id)->count();
        return 0;
    }

}
