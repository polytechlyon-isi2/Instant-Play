<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function show($n)
    {
        return view('pages.article')->with('numero',$n);
    }
}
