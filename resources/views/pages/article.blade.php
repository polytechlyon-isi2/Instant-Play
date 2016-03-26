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
    <li><a href="#">Home</a> ::</li>
    <li><a href="#">Product Page</a> ::</li>
    <li>Product Name</li>
    <div class="clear"> </div>
@endsection

@section('product-images')
    <li>
        <a href="optionallink.html">
            <img class="etalage_thumb_image" src="images/preview-small-img1.png" />
            <img class="etalage_source_image" src="images/preview-large-img1.jpg" title="" />
        </a>
    </li>
    <li>
        <img class="etalage_thumb_image" src="images/preview-small-img2.png"  />
        <img class="etalage_source_image" src="images/preview-large-img2.jpg" title="" />
    </li>
@endsection

@section('product-info')
    <h2>{{$game->name}}</h2>
    <p>{{$game->description}}</p>
    <div class="price">
        <p>Price: <span>${{$game->price}}</span></p>
    </div>
    <div class="available">
        <ul>
            <li><span>Units in Stock:</span>&nbsp; {{$game->stock}}</li>
        </ul>
    </div>
@endsection

@section('product-informations')
    {{$game->description}}
@endsection


@section('spec-os')
    Windows 7
@endsection

@section('spec-cpu')
    Core i5-2400 3.1GHz / FX-6100
@endsection

@section('spec-gpu')
    GeForce GTX 560 / Radeon HD 7770 2GB GHz Edition
@endsection

@section('spec-ram')
    6 GB
@endsection

@section('spec-hdd')
    40 GB
@endsection


@section('product-videos')
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{$game->video}}"></iframe>
    </div>
@endsection

