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
        $moeindetail = Moeindetail::all();
        return view('dashboard.moeindetail.index',compact('moeindetail'));
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
            'tip' => 'required',
            'examples' => 'required',
            'answers' => 'required',
            'moeinId' => 'required',
        ]);

        $moein = Moeindetail::create([
            'tip' => $request->tip,
            'examples' => $request->examples,
            'answers' => $request->answers,
            'moeinId' => $request->moeinId,
        ]);

        alert('انجام شد',' معین با موفقیت ثب گردید ');
        return redirect()->back();
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
        return view('dashboard.moeindetail.edit', compact('moeindetail'));
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
        $request-> validate([
            'tip' => 'required',
            'examples' => 'required',
            'answers' => 'required',
        ]);

        $moeindetail->update([
            'tip' => $request->tip,
            'examples' => $request->examples,
            'answers' => $request->answers,
        ]);

        alert('انجام شد','اطلاعات تکمیلی معین شما با موفقیت ویرایش شد. ');
        return redirect()->back();
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
