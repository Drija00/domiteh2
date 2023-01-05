<?php

namespace App\Http\Controllers;

use App\Models\Pacijent;
use Illuminate\Http\Request;

class PacijentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pacijent::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pacijent::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacijent $pacijent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacijent $pacijent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacijent $pacijent)
    {
        //
    }
}
