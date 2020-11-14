<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\insurpack;
use Illuminate\Http\Request;

class InsurpackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.insurpack.index');
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
     * @param  \App\insurpack  $insurpack
     * @return \Illuminate\Http\Response
     */
    public function show(insurpack $insurpack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insurpack  $insurpack
     * @return \Illuminate\Http\Response
     */
    public function edit(insurpack $insurpack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insurpack  $insurpack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, insurpack $insurpack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insurpack  $insurpack
     * @return \Illuminate\Http\Response
     */
    public function destroy(insurpack $insurpack)
    {
        //
    }
}
