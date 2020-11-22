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
        $moein = Moein::all();
        return view('dashboard.moein.index',compact('moein'));
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
        $request-> validate([
            'codeNum' => 'required',
            'title' => 'required',
            'insurpackCode' => 'required',
        ]);

        $moein = Moein::create([
            'codeNum' => $request->codeNum,
            'title' => $request->title,
            'moeinCode' => $request->moeinCode,
            'moeinName' => $request->moeinName,
            'insurpackCode' => $request->insurpackCode,
        ]);

        alert('انجام شد',' معین با موفقیت ثب گردید ');
        return redirect()->back();
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
        return view('dashboard.moein.edit', compact('moein'));
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
        $request-> validate([
            'codeNum' => 'required',
            'title' => 'required',
            'insurpackCode' => 'required',
        ]);

        $moein->update([
            'codeNum' => $request->codeNum,
            'title' => $request->title,
            'moeinCode' => $request->moeinCode,
            'moeinName' => $request->moeinName,
            'insurpackCode' => $request->insurpackCode,
        ]);

        alert('انجام شد','معین با موفقیت ویرایش شد. ');
        return redirect()->back();
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
