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

    public static function boot()
    {
        parent::boot();

        static::creating( function($hours) {

            $hours->setSlug($hours);

        });  
    }

    protected function setSlug($hours)
    {
        $hours->slug = str_slug($hours->season);

        $latestSlug = 
                    static::whereRaw("slug RLIKE '^{$hours->slug}(-[0-9]*)?$'")
                    ->latest('id')
                    ->pluck('slug');

        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);

            $number = intval(end($pieces));

            $hours->slug .= '-' . ($number + 1);
        }
    }
}
