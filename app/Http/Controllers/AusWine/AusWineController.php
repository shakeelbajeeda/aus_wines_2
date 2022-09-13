<?php

namespace App\Http\Controllers\AusWine;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAusWineRequest;
use App\Http\Requests\UpdateAusWineRequest;
use App\Models\AusWine;

class AusWineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ausWines'] = AusWine::all();
        return view('ausWine.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ausWine.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAusWineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAusWineRequest $request)
    {
        $req = $request->validated();
        AusWine::create($req);
        return redirect()->route('ausWine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AusWine  $ausWine
     * @return \Illuminate\Http\Response
     */
    public function show(AusWine $ausWine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AusWine  $ausWine
     * @return \Illuminate\Http\Response
     */
    public function edit(AusWine $ausWine)
    {
        return view('ausWine.form', compact('ausWine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAusWineRequest  $request
     * @param  \App\Models\AusWine  $ausWine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAusWineRequest $request, AusWine $ausWine)
    {
        $req = $request->validated();
        $ausWine->update($req);
        return redirect()->route('ausWine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AusWine  $ausWine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ausWine = AusWine::findOrFail($id);
        $ausWine->delete();
        return redirect()->back();
    }
}
