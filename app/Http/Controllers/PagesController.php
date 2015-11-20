<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stylist;
use App\Product;
use App\Hours;

class PagesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth', ['only' => 'panel']);
    }

    function home ()
    {
        return view('home');
    }

    function about ()
    {
        return view('about');
    }

    function stylists ()
    {
        $stylists = Stylist::all();
        return view('stylists', compact('stylists'));
    }

    function products ()
    {
        $one = Product::where('brand', 'one')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->get();
        $two = Product::where('brand', 'two')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->get();
        return view('products', compact('one', 'two'));
    }

    function contact ()
    {
        $hours = Hours::where('active', '=', true)->get();
        return view('contact', compact('hours'));
    }

    function panel ()
    {
        $stylists = Stylist::all();

        $brandone = Product::where('brand', 'one')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->get();
        $brandOneActive = Product::where('brand', 'one')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->lists('id', 'order')->toArray();
        $brandOneActive = array_replace([1 => null, 2 => null, 3 => null], $brandOneActive);
        $brandOneAll = Product::where('brand', 'one')->lists('name', 'id')->toArray();
        $brandOneList = Product::where('brand', 'one')->get();

        $brandtwo = Product::where('brand', 'two')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->get();
        $brandTwoActive = Product::where('brand', 'two')->where('order', '>', '0')->orderBy('order', 'ASC')->take(3)->lists('id', 'order')->toArray();
        $brandtwoActive = array_replace([1 => null, 2 => null, 3 => null], $brandTwoActive);
        $brandTwoAll = Product::where('brand', 'two')->lists('name', 'id')->toArray();
        $brandTwoList = Product::where('brand', 'two')->get();

        $hours = Hours::all();
        return view('panel', compact('stylists','brandone','brandOneActive','brandOneAll','brandOneList','brandtwo','brandTwoActive','brandTwoList','brandTwoAll','hours'));
    }

    function sitemap ()
    {
        return view('sitemap');
    }
}
