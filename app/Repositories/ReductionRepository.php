<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:41
 */

namespace App\Repositories;

use App\Models\Reduction;

class ReductionRepository
{

    protected $reduction;

    public function __construct(Raduction $reduction)
    {
        $this->reduction = $reduction;
    }

    public function getPaginate($n)
    {
        return $this->reduction
            ->orderBy('reduction.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->reduction->create($inputs);
    }

    public function destroy($id)
    {
        $this->reduction->findOrFail($id)->delete();
    }

}