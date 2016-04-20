<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $categoryRepository;


    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'indexCategory']]);
        $this->middleware('admin', ['only' => 'destroy']);
        
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getWhole();
        return view('pages.welcome', compact('categories'));
    }

    public function showGamesRelated($id)
    {
        $category = $this->categoryRepository->getWithId($id);
        return view('pages.category', compact('category'));
    }
}
