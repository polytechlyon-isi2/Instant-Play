<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    protected $photoRepository;

    protected $nbrPerPage = 4;

    public function __construct(PhotoRepository $photoRepository)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->photoRepository = $photoRepository;
    }

    public function index()
    {
        $photos = $this->photoRepository->getPaginate($this->nbrPerPage);
        $links = $photos->setPath('')->render();

		return view('photos.liste', compact('photos', 'links'));
	}

    public function create()
    {
        return view('photos.add');
    }

    public function store(PhotoRequest $request)
    {
        $inputs = array_merge($request->all(), ['game_id' => $request->game()->id]);

        $this->photoRepository->store($inputs);

        return redirect(route('photo.index'));
    }

    public function destroy($id)
    {
        $this->photoRepository->destroy($id);

        return redirect()->back();
    }
}
