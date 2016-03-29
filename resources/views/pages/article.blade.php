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
    <li> {{ $game->game_name }} </li>
    <div class="clear"> </div>
@endsection

@section('product-images')

    <img class="etalage_thumb_image" src="../images/games/{{ $game->photo_name }}" />

    {{-- ci-dessous : pas encore fonctionnel - tableau vide --}}
    @foreach($photos as $photo)
        <li>
            <a href="optionallink.html">
                <img class="etalage_thumb_image" src="../images/games/{{ $photo->photo->name }}" />
                <img class="etalage_source_image" src="../images/games/{{ $photo->photo->name }}" title="" />
            </a>
        </li>
    @endforeach

@endsection

@section('product-info')
    <h2>{{ $game->game_name }}</h2>
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



@section('spec-os')
    {{$game->os}}
@endsection

@section('spec-cpu')
    {{ $game->cpu }}
@endsection

@section('spec-gpu')
    {{ $game->gpu }}
@endsection

@section('spec-ram')
    {{ $game->ram }}
@endsection

@section('spec-hdd')
    {{ $game->hdd }}
@endsection


@section('product-videos')
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $game->video }}"></iframe>
    </div>
@endsection

