<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:42
 */

namespace App\Repositories;

use App\Models\Video;

class VideoRepository
{

    protected $video;

    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    public function getPaginate($n)
    {
        return $this->video
            ->orderBy('video.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->video->create($inputs);
    }

    public function destroy($id)
    {
        $this->video->findOrFail($id)->delete();
    }

}