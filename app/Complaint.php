<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
    'region_id',
	'complaint_type_id',
	'neighborhood_citizen_id',
	'title',
	'text',
	'sender_full_name',
	'sender_phone',
	'sender_email',
	'status'
	];
	
	public function region()
    {
        return $this->belongsTo(Region::class);
	}
	
	public function complaintType()
    {
        return $this->belongsTo(ComplaintType::class);
	}

	public function neighborhoodCitizen()
    {
        return $this->belongsTo(NeighborhoodCitizen::class);
	}
	
	public function scopeType(Builder $builder, $type)
    {
        $builder->where('complaint_type_id', $type);
    }

	public function scopeStatus($query, $type = 1)
    {
        $query->where('status', $type);
    }

	
}