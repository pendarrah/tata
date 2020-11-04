<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        return view('app.blog', compact('blog'));
    }

}
