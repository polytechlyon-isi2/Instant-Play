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
        $this->middleware('auth', ['except' => ['index', 'indexTag']]);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->gameRepository = $gameRepository;
    }

    public function index()
    {
        $games = $this->gameRepository->getWithCategoriesAndLanguagesPaginate($this->nbrPerPage);
        $links = $games->setPath('')->render();

        return view('pages.welcome', compact('games', 'links'));
    }

    public function create()
    {
        return view('games.add');
    }

    public function store(GameRequest $request, CategoryRepository $categoryRepository, LanguageRepository $languageRepository)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $game = $this->gameRepository->store($inputs);

        if(isset($inputs['categories']) && isset($inputs['languages']))
        {
            $categoryRepository->store($game, $inputs['categories']);
            $languageRepository->store($game, $inputs['languages']);
        }

        return redirect(route('welcome'));
    }

    public function destroy($id)
    {
        $this->gameRepository->destroy($id);

        return redirect()->back();
    }

    public function indexCategory($category)
    {
        $game = $this->gameRepository->getWithCategoriesAndLanguagesForCategoriesPaginate($category, $this->nbrPerPage);
        $links = $game->setPath('')->render();

        return view('games.liste', compact('games', 'links'))
            ->with('category', 'Catégories : ' . $category);
    }

    public function indexLanguage($language)
    {
        $game = $this->gameRepository->getWithCategoriesAndLanguagesForLanguagesPaginate($language, $this->nbrPerPage);
        $links = $game->setPath('')->render();

        return view('games.liste', compact('games', 'links'))
            ->with('language', 'Languages : ' . $language);
    }
}
