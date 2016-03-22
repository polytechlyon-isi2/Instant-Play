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

    private function queryWithCategories()
    {
        return $this->game->with('categories')
            ->orderBy('games.id', 'desc');
    }

    private function queryWithId($id)
    {
        return $this->game->where('id', $id);
    }

    public function getWithId($id)
    {
        return $this->queryWithId($id);
    }

    public function getWithCategoriesPaginate($n)
    {
        return $this->queryWithCategories()->paginate($n);
    }

    public function getWithCategoriesForCategoryPaginate($category, $n)
    {
        return $this->queryWithCategories()
            ->whereHas('categories', function($q) use ($category)
            {
                $q->where('categories.id', $category);
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