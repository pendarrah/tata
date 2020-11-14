<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Moeindetail;
use Illuminate\Http\Request;

class MoeindetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.moeindetail.index');
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
     * @param  \App\Moeindetail  $moeindetail
     * @return \Illuminate\Http\Response
     */
    public function show(Moeindetail $moeindetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moeindetail  $moeindetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Moeindetail $moeindetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moeindetail  $moeindetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moeindetail $moeindetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moeindetail  $moeindetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moeindetail $moeindetail)
    {
        //
    }
}
