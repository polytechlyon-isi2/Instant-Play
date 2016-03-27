<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:40
 */

namespace App\Repositories;

use App\Models\Game;
use DB;

class GameRepository
{
    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    // Queries
    private function queryWithCategories()
    {
        return $this->game->with('categories')
            ->orderBy('game.id', 'desc');
    }

    private function queryWithId($id)
    {
        $game = DB::table('game')->where('id',$id)->first();
        return $game;
    }

    private function queryWhole()
    {
        return $this->game->with('studio', 'platform', 'spec', 'photos', 'reductions', 'categories', 'languages')
            ->orderBy('game.id', 'desc');
    }

    // Get
    public function getWithId($id)
    {
        return $this->queryWithId($id);
    }

    public function getWithCategoriesPaginate($n)
    {
        return $this->queryWithCategories()->paginate($n);
    }

    public function getWholePaginate($n)
    {
        return $this->queryWhole()->paginate($n);
    }

    // GetForPaginate
    public function getWithCategoriesForCategoryPaginate($category, $n)
    {
        return $this->queryWithCategories()
            ->whereHas('category', function($q) use ($category)
            {
                $q->where('category.id', $category);
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
        $game->studio()->detach();
        $game->platform()->detach();
        $game->spec()->detach();
        $game->photos()->detach();
        $game->commands()->detach();
        $game->reductions()->detach();

        $game->delete();
    }
}