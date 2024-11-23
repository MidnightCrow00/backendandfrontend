<?php

namespace App\Http\Controllers;

use App\Models\Virag;
use Illuminate\Http\Request;

class ViragokController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Virag::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Virag();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Virag::find($id)->delete();
    }
}
