<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GameRepository;
use App\Repositories\CategoryRepository;

use App\Http\Requests;

class GameController extends Controller
{
    protected $gameRepository;

    protected $nbrPerPage = 20;

    public function __construct(GameRepository $gameRepository)
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'indexCategory']]);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->gameRepository = $gameRepository;
    }

    public function index()
    {
        $games = $this->gameRepository->getWithCategoriesPaginate($this->nbrPerPage);
        $links = $games->setPath('')->render();

        return view('pages.welcome', compact('games', 'links'));
    }

    public function create()
    {
        return view('games.add');
    }

    public function store(GameRequest $request, CategoryRepository $categoryRepository)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $game = $this->gameRepository->store($inputs);

        if(isset($inputs['categories']))
        {
            $categoryRepository->store($game, $inputs['categories']);
        }

        return redirect(route('game.index'));
    }

    public function show($id)
    {
        $game = $this->gameRepository->getWithId($id);
        //$game = Game::find($id);

        return view('pages.article', compact('game'));
    }

    public function destroy($id)
    {
        $this->gameRepository->destroy($id);

        return redirect()->back();
    }

    public function indexCategory($category)
    {
        $game = $this->gameRepository->getWithCategoriesForCategoryPaginate($category, $this->nbrPerPage);
        $links = $game->setPath('')->render();

        return view('games.liste', compact('games', 'links'))
            ->with('category', 'Catégories : ' . $category);
    }
}
