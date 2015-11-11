<?php

namespace App;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model implements StaplerableInterface
{
    use EloquentTrait;

	protected $fillable = ['first_name', 'last_name', 'bio', 'photo'];

	public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo', [
            'styles' => [
                'medium' => [
                    'dimensions' => '250x250',
                    'convert_options' => ['quality' => 100]
                    ],
                'thumb'  => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    public static function boot()
    {
        parent::boot();

        static::creating( function($stylist) {

            $stylist->setSlug($stylist);

        });     
    }

    protected function setSlug($stylist)
    {
        $stylist->slug = str_slug($stylist->first_name);

        $latestSlug = 
                    static::whereRaw("slug RLIKE '^{$stylist->slug}(-[0-9]*)?$'")
                    ->latest('id')
                    ->pluck('slug');

        if ($latestSlug) {
            $pieces = explode('-', $latestSlug);

            $number = intval(end($pieces));

            $stylist->slug .= '-' . ($number + 1);
        }
    }
}
