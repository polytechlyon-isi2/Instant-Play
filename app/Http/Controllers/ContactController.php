<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function getInfos()
    {
        return view('pages.contact');
    }


    public function postInfos(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
}
