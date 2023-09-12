<?php

namespace App\Http\Controllers;

use App\Models\Sensores;
use App\Http\Requests\UpdateSensoresRequest;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensores=Sensores::all();
        return $sensores;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sensor=Sensores::create($request->all());
        return $sensor;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensores $sensores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensores $sensores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSensoresRequest $request, Sensores $sensores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensores $sensores)
    {
        //
    }
}
