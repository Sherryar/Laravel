<?php

namespace App\Http\Controllers;

use App\Cow;
use App\Http\Resources\CowResource;
use App\MilkOutput;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CowResource::collection(Cow::latest()->paginate(5));
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
     * @return CowResource
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        $cow = new Cow;
        $cow->name = $request->name;
        $cow->save();

        return new CowResource($cow);
    }

    /**
     * Display the specified resource.
     *
     * @param Cow $cow
     * @return CowResource
     */
    public function show(Cow $cow)
    {
        return new CowResource($cow);
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
     * @param Request $request
     * @param Cow $cow
     * @return CowResource
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Cow $cow)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        $cow->update($request->only(['name']));

//        $milkOutputs = $cow->milkOutputs()->get();
//
//        if (count($milkOutputs)) {
//            foreach($milkOutputs as $milkOutput) {
//                $milkOutput->update($request->only('milk_output', 'cow_id'));
//            }
//        }

        return new CowResource($cow);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cow $cow
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Cow $cow)
    {
        $cow->milkOutputs()->delete();
        $cow->delete();

        return response()->json('null', 204);
    }
}
