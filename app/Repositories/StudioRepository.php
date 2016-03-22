<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:42
 */

namespace App\Repositories;

use App\Models\Studio;

class StudioRepository
{

    protected $studio;

    public function __construct(Studio $studio)
    {
        $this->studio = $studio;
    }

    public function getPaginate($n)
    {
        return $this->studio
            ->orderBy('studio.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->studio->create($inputs);
    }

    public function destroy($id)
    {
        $this->studio->findOrFail($id)->delete();
    }

}