<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:40
 */

namespace App\Repositories;

use App\Models\Game;

class GameRepository
{

    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    private function queryWithCategoriesAndLanguages()
    {
        return $this->game->with('category', 'language')
            ->orderBy('game.id', 'desc');
    }

    private function queryWithId($id)
    {
        return $this->game->where('id', $id);
    }

    public function getWithId($id)
    {
        return $this->queryWithId($id);
    }

    public function getWithCategoriesAndLanguagesPaginate($n)
    {
        return $this->queryWithCategoriesAndLanguages()->paginate($n);
    }

    public function getWithCategoriesAndLanguagesForCategoriesPaginate($category, $n)
    {
        return $this->queryWithCategoriesAndLanguages()
            ->whereHas('category', function($q) use ($category)
            {
                $q->where('categories', $category);
            })->paginate($n);
    }

    public function getWithCategoriesAndLanguagesForLanguagesPaginate($language, $n)
    {
        return $this->queryWithCategoriesAndLanguages()
            ->whereHas('tags', function ($q) use ($language) {
                $q->where('language', $language);
            })->paginate($n);
    }

    public function store($inputs)
    {
        $this->game->create($inputs);
    }

    public function destroy($id)
    {
        $game = $this->game->findOrFail($id);
        $game->categories()->detach();
        $game->languages()->detach();
        $game->delete();
    }

}