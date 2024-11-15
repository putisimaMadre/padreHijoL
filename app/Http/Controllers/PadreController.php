<?php

namespace App\Http\Controllers;

use App\Models\Padre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$padres = Padre::all();
        $padres = DB::table("padres")->get();
        return $padres;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Padre $padre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Padre $padre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Padre $padre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Padre $padre)
    {
        //
    }
}
