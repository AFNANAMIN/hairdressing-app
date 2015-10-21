<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'brand', 'order'];

    static public function setFeatured($brand, $one, $two, $three)
    {
    	$allProducts = Product::where('brand', $brand)->update(['order' => 0]);

    	$firstProduct = Product::findOrFail($one);
    	$firstProduct->order = 1;
    	$firstProduct->save();

    	$secondProduct = Product::findOrFail($two);
    	$secondProduct->order = 2;
    	$secondProduct->save();

    	$thirdProduct = Product::findOrFail($three);
    	$thirdProduct->order = 3;
    	$thirdProduct->save();
    }
}
