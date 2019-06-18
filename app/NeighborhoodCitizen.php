<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NeighborhoodCitizen extends Model
{
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}