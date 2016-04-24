<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Routing\Route;

class CartController extends GameController
{
    public function index()
    {
        $games = Session::all();

        return view('pages.cart', compact('games'));
    }

    public function store($id)
    {
        $game = $this->gameRepository->getWithId($id);

        Session::put($game->id, $game);
        //session()->get('');

        // ::has('') ::get('') ::all()

        $games = Session::all();

        return view('pages.cart', compact('games'));
    }
}
