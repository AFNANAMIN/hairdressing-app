<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateStylistsRequest;
use App\Http\Requests\UpdateStylistsRequest;
use App\Http\Controllers\Controller;

use App\Stylist;

class StylistsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stylist = new Stylist;
        return view('stylists.create', compact('stylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStylistsRequest $request)
    {
        // Create and save a new stylist, mass assigning all of the input fields.
        $stylist = new Stylist($request->all());

        $stylist->save();

        return redirect(route('panel') . '#stylists');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $stylist = Stylist::whereSlug($slug)->firstOrFail();
        return view('stylists.edit', compact('stylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStylistsRequest $request, $id)
    {
        $stylist = Stylist::findOrFail($id);
        $stylist->fill($request->all());
        $stylist->save();

        return redirect(route('panel') . '#stylists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stylist = Stylist::find($id);
        $stylist->delete();

        return redirect(route('panel') . '#stylists');
    }
}
