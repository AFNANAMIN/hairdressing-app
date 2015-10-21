<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
    public function store(Request $request)
    {
        // Create and save a new stylist, mass assigning all of the input fields.
        $stylist = new Stylist($request->all());
        $this->validate($request, [
            'first_name' => 'required',
            'bio' => 'required',
            'photo' => 'required'
        ]);
        $stylist->save();

        return redirect()->route('stylists');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stylist = Stylist::find($id);
        return view('stylists.edit', compact('stylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stylist = Stylist::findOrFail($id);
        $stylist->fill($request->all());
        $this->validate($request, [
            'first_name' => 'required',
            'bio' => 'required',
            'photo' => 'required'
        ]);
        $stylist->save();

        return redirect()->route('stylists')
            ->with('status.success', 'Success! The stylist is now updated!');;
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

        return redirect()->route('stylists');
    }
}
