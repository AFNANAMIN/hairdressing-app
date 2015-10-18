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
}
