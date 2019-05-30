<?php

namespace App\Http\Controllers;

use App\Cow;
use App\Http\Resources\CowResource;
use App\MilkOutput;
use Illuminate\Http\Request;

class CowController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all()
    {
        return view('landing', [
            'cows' => Cow::latest()->paginate(5),
        ]);
    }

    /**
     * @param Cow $cow
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single(Cow $cow)
    {
        return view('single', compact('cow'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'milk_output' => 'required|numeric|between:0,49.99',
        ]);

//        $cow = new Cow;
//        $milkOutput = new MilkOutput;
//
//        $cow->name = $request->name;
//        $milkOutput->milk_output = $request->milk_output;
//        $cow->milkOutputs()->associate($cow)->save();
//        $cow->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function show(Cow $cow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function edit(Cow $cow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cow $cow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cow $cow)
    {
        //
    }
}
