<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:40
 */

namespace App\Repositories;

use App\Models\Command;

class CommandRepository
{

    protected $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function getPaginate($n)
    {
        return $this->command
            ->orderBy('command.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->command->create($inputs);
    }

    public function destroy($id)
    {
        $this->command->findOrFail($id)->delete();
    }

}