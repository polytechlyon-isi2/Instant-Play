<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:41
 */

namespace App\Repositories;

use App\Models\Platform;

class PlatformRepository
{

    protected $platform;

    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }

    public function getPaginate($n)
    {
        return $this->platform
            ->orderBy('platform.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->platform->create($inputs);
    }

    public function destroy($id)
    {
        $this->platform->findOrFail($id)->delete();
    }

}