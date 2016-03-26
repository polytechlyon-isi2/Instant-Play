@extends('layouts.app')
@section('content')
    <div class="content-bottom-right">
        <h3>Browse All Products</h3>
        <div class="section group">

            @foreach($games as $game)
            <div class="grid_1_of_4 images_1_of_4">
                <h4><a href="article/{{$game->id}}">{{ $game->name }}</a></h4>
                <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">{{ $game->price }} € </span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="article/{{$game->id}}">More Info</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('imports.rightsidebar')
@endsection