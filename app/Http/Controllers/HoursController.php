<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
    public function store(Request $request)
    {
        // Create and save a new season, mass assigning all of the input fields.
        $hours = new Hours($request->all());
        $this->validate($request, [
            'season' => 'required',
            'description' => 'required',
            'active' => 'required'
        ]);
        $hours->save();

        return redirect()->route('panel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hours = hours::find($id);
        return view('hours.edit', compact('hours'));
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
        $hours = hours::findOrFail($id);
        $hours->fill($request->all());
        $this->validate($request, [
            'season' => 'required',
            'description' => 'required',
            'active' => 'required'
        ]);
        $hours->save();

        return redirect()->route('panel')
            ->with('status.success', 'Success! The hours are now updated!');;
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

        return redirect()->route('contact');
    }
}
