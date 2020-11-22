<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Insurpack;
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
        $insurpack = Insurpack::all();
        return view('dashboard.insurpack.index',compact('insurpack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'codeNum' => 'required',
            'users' => 'required',
        ]);

        $insurpack = Insurpack::create([
            'title' => $request->title,
            'codeNum' => $request->codeNum,
            'users' => $request->users,
        ]);

        alert('پکیج با موفقیت شد','انجام شد');
        return redirect()->back();
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
        return view('dashboard.insurpack.edit', compact('insurpack'));
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
        $request->validate([
            'title' => 'required',
            'codeNum' => 'required',
            'users' => 'required',
        ]);

        $insurpack->update([
            'title' => $request->title,
            'codeNum' => $request->codeNum,
            'users' => $request->users,
        ]);

        alert('پکیج بیمه با موفقیت ویرایش شد','انجام شد');
        return redirect()->back();
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
