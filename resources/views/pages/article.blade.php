<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 11:11
 */
?>

@extends('layouts.preview')

@section('back-links')
    <li><a href="home.blade.php">Home</a> ::</li>
    <li><a href="#">Product Page</a> ::</li>
    <li>Product Name</li>
    <div class="clear"> </div>
@endsection

@section('product-images')
{{--    @foreach($game->photos as $photo)
        <li>
            <a href="optionallink.html">
                <img class="etalage_thumb_image" src="images/games/{{ $photo->name // image miniature }}" />
                <img class="etalage_source_image" src="images/games/{{ $photo->name // image large }}" title="" />
            </a>
        </li>
    @endforeach--}}
@endsection

@section('product-info')
    <h2>{{ $game->name }}</h2>
    <p>{{ $game->description }}</p>
    <div class="price">
        <p>Price: <span>${{ $game->price }}</span></p>
    </div>
    <div class="available">
        <ul>
            <li><span>Units in Stock:</span>&nbsp; {{ $game->stock }}</li>
        </ul>
    </div>
@endsection

@section('product-informations')
    {{ $game->description }}
@endsection


{{--
@section('spec-os')
    {{ $game->spec->os }}
@endsection

@section('spec-cpu')
    {{ $game->spec->cpu }}
@endsection

@section('spec-gpu')
    {{ $game->spec->gpu }}
@endsection

@section('spec-ram')
    {{ $game->spec->ram }}
@endsection

@section('spec-hdd')
    {{ $game->spec->hdd }}
@endsection
--}}


@section('product-videos')
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $game->video }}"></iframe>
    </div>
@endsection

