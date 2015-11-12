<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\HoursRequest;
use App\Http\Controllers\Controller;

use App\Hours;

class HoursController extends Controller
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
        $hours = new Hours;
        return view('hours.create', compact('hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HoursRequest $request)
    {
        // Create and save a new season, mass assigning all of the input fields.
        $hours = new Hours($request->all());
        
        $hours->save();

        return redirect(route('panel') . '#hours');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $hours = Hours::whereSlug($slug)->firstOrFail();
        return view('hours.edit', compact('hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HoursRequest $request, $id)
    {
        $hours = Hours::findOrFail($id);
        $hours->fill($request->all());
        $hours->save();

        return redirect(route('panel') . '#hours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hours = Hours::find($id);
        $hours->delete();

        return redirect(route('panel') . '#hours');
    }
}
