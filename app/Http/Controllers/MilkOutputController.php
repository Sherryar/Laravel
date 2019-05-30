<?php

namespace App\Http\Controllers;

use App\Http\Resources\MilkOutputResource;
use App\MilkOutput;
use Illuminate\Http\Request;

class MilkOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return MilkOutputResource::collection(MilkOutput::latest()->get());
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
     * @param Request $request
     * @return MilkOutputResource
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cow_id' => 'required',
            'milk_output' => 'required|numeric|between:0,49.99'
        ]);

        $milkOutput = new MilkOutput;
        $milkOutput->cow_id = $request->cow_id;
        $milkOutput->milk_output = $request->milk_output;
        $milkOutput->save();

        return new MilkOutputResource($milkOutput);
    }

    /**
     * Display the specified resource.
     *
     * @param MilkOutput $milkOutput
     * @return MilkOutputResource
     */
    public function show(MilkOutput $milkOutput)
    {
        return new MilkOutputResource($milkOutput);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MilkOutput  $milkOutput
     * @return \Illuminate\Http\Response
     */
    public function edit(MilkOutput $milkOutput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param MilkOutput $milkOutput
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, MilkOutput $milkOutput)
    {
        $this->validate($request, [
            'cow_id' => 'required',
            'milk_output' => 'required|numeric|between:0,49.99',
        ]);

        $milkOutput->update($request->only([
            'cow_id',
            'milk_output',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MilkOutput $milkOutput
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(MilkOutput $milkOutput)
    {
        $milkOutput->delete();

        return response()->json('null', 204);
    }
}
