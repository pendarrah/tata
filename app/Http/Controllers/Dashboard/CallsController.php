<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Call;
use Illuminate\Http\Request;

class CallsController extends Controller
{
    public function index()
    {
        $calls  = Call::all();
        return view('dashboard.calls', compact('calls'));
    }
}
