<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    protected $table = 'hours';

    protected $fillable = ['season', 'description', 'active'];

    public function scopeCurrentHours($query)
    {
    	return $query->where('active', '=', true)->get();
    }
}
