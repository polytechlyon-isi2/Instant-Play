<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:40
 */

namespace App\Repositories;

use App\Models\Photo;

class PhotoRepository
{

    protected $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }

    public function getPaginate($n)
    {
        return $this->photo->with('game')
            ->orderBy('photo.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->photo->create($inputs);
    }

    public function destroy($id)
    {
        $this->photo->findOrFail($id)->delete();
    }

}