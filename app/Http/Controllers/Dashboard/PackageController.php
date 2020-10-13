<?php

namespace App\Http\Controllers\Dashboard;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('dashboard.package.index', compact('packages'));
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
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'items' => 'required',
        ]);

        $package = Package::create([
            'title' => $request->title,
            'price' => $request->price,
            'items' => $request->items,
        ]);

        alert('پکیج با موفقیت شد','انجام شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('dashboard.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'items' => 'required',
        ]);

        $package->update([
            'title' => $request->title,
            'price' => $request->price,
            'items' => $request->items,
        ]);

        alert('پکیج با موفقیت ویرایش شد','انجام شد');
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package, Request $request)
    {

        if (\Auth::user()->type !== 'admin') {
            alert()->warning('عدم دسترسی');
            return redirect()->route('dashboard.index');
        }


        Package::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
