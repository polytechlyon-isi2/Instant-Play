<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:41
 */

namespace App\Repositories;

use App\Models\Spec;

class SpecRepository
{

    protected $spec;

    public function __construct(Spec $spec)
    {
        $this->spec = $spec;
    }

    public function getPaginate($n)
    {
        return $this->spec
            ->orderBy('spec.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->spec->create($inputs);
    }

    public function destroy($id)
    {
        $this->spec->findOrFail($id)->delete();
    }

}