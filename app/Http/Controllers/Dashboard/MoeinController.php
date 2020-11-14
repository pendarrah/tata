<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Moein;
use Illuminate\Http\Request;

class MoeinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.moein.index');
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
     * @param  \App\Moein  $moein
     * @return \Illuminate\Http\Response
     */
    public function show(Moein $moein)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moein  $moein
     * @return \Illuminate\Http\Response
     */
    public function edit(Moein $moein)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moein  $moein
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moein $moein)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moein  $moein
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moein $moein)
    {
        //
    }
}
