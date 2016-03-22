<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:40
 */

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryRepository
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function store($game, $categories)
    {
        $categories = explode(',', $categories);

        foreach ($categories as $category) {

            $category = trim($category);

            $category_url = Str::slug($category);

            $category_ref = $this->category->where('category_url', $category_url)->first();

            if(is_null($category_ref)) {
                $category_ref = new $this->category([
                    'category' => $category,
                    'category_url' => $category_url
                ]);

                $game->categories()->save($category_ref);

            } else {

                $game->categories()->attach($category_ref->id);

            }
        }
    }

    public function destroy($id)
    {
        $this->category->findOrFail($id)->delete();
    }

}