<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Participate;
use Illuminate\Http\Request;

class ParticipatesController extends Controller
{
    public function index()
    {
        $participates  = Participate::all();
        return view('dashboard.participates', compact('participates'));
    }

}
