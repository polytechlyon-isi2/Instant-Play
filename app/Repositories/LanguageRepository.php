<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 22/03/2016
 * Time: 16:41
 */

namespace App\Repositories;

use App\Models\Language;

class LanguageRepository
{

    protected $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function getPaginate($n)
    {
        return $this->language
            ->orderBy('language.id', 'desc')
            ->paginate($n);
    }

    public function store($inputs)
    {
        $this->language->create($inputs);
    }

    public function destroy($id)
    {
        $this->language->findOrFail($id)->delete();
    }

}