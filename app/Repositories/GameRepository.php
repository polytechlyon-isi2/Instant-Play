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
        //return $this->game->join('spec', 'game.spec_id', '=', 'spec.id')
        //    ->where('game.id',$id)->first();

        $game = DB::table('game')
            ->join('spec', 'game.spec_id', '=', 'spec.id')
            ->join('platform', 'game.platform_id', '=', 'platform.id')
            ->join('studio', 'game.studio_id', '=', 'studio.id')
            ->leftjoin('photo', 'game.id', '=', 'photo.game_id')
            ->where('game.id',$id)
            ->select('game.*', 'game.name as game_name', 'spec.*', 'platform.*', 'studio.*', 'photo.name as photo_name')
            ->first();
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

    // photo
    private function queryPhotosWithGameId($game_id)
    {
        /*$photos = DB::table('photo')
            ->where('game_id',$game_id)
            ->select('photo.*')
            ->get();
        return $photos; */

        return $this->game->with('photos');
    }

    public function getPhotosWithGameId($game_id)
    {
        return $this->queryPhotosWithGameId($game_id);
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