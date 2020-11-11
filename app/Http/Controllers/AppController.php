<?php

namespace App\Http\Controllers;

use App\Call;
use App\Participate;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function participate(Request $request)
    {
        $request->validate([
            'fNameM' => 'required|min:3|max:30',
            'service' => 'required',
            'lNameM' => 'required|min:3|max:30',
            'companyM' => 'required|min:3|max:30',
            'phoneM' => 'required|numeric',
        ]);

        Participate::create(['fNameM' => $request->fNameM, 'service' => $request->service, 'lNameM' => $request->lNameM, 'companyM' => $request->companyM, 'phoneM' => $request->phoneM]);
        alert()->success('درخواست شما ثبت شد', 'ثبت شد');
        return view('app.index');
    }

    public function call(Request $request)
    {
        $request->validate([
            'phoneC' => 'required|numeric',
            'description' => 'required',
        ]);

        Call::create(['phoneC' => $request->phoneC, 'description' => $request->description]);
        alert()->success('درخواست شما ثبت شد', 'ثبت شد');
        return view('app.index');
    }


}
