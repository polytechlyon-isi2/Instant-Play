<?php
/**
 * Created by PhpStorm.
 * User: GregoirePiat
 * Date: 08/03/16
 * Time: 14:47
 */
?>
        {{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    --}}{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}{{--

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<div class="navigation">
    <a class="toggleMenu" href="#">Menu</a>
    <ul class="nav">
        <li>
            <a href="index.html">Home</a>
        </li>
        <li  class="test">
            <a href="#">Action</a>
            <ul>
                <li><a href="#">Platform games</a></li>
                <li><a href="#">Shooter games</a></li>
                <li><a href="#">Fighting</a></li>
                <li><a href="#">Beat them all</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Action-adventure</a>
            <ul>
                <li><a href="#">Stealth game</a></li>
                <li><a href="#">Survival horror</a></li>
                <li><a href="#">Metroidvania</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Adventure</a>
            <ul>
                <li><a href="#">Text adventures</a></li>
                <li><a href="#">Graphic adventures</a></li>
                <li><a href="#">Visual novels</a></li>
                <li><a href="#">Interactive movie</a></li>
                <li><a href="#">Real-time 3D adventures</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Role-playing</a>
            <ul>
                <li><a href="#">Action RPG</a></li>
                <li><a href="#">MMORPG</a></li>
                <li><a href="#">Roguelike</a></li>
                <li><a href="#">Tactical RPG</a></li>
                <li><a href="#">Sandbox RPG</a></li>
                <li><a href="#">Choices</a></li>
                <li><a href="#">Fantasy</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Strategy</a>
            <ul>
                <li><a href="#">4X game</a></li>
                <li><a href="#">Artillery game</a></li>
                <li><a href="#">RTS</a></li>
                <li><a href="#">MMORTS</a></li>
                <li><a href="#">Tower defense</a></li>
                <li><a href="#">Turn-based strategy</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Simulation</a>
            <ul>
                <li><a href="#">Construction and management simulation</a></li>
                <li><a href="#">Life simulation</a></li>
                <li><a href="#">Vehicule simulation</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Sports</a>
            <ul>
                <li><a href="#">Racing</a></li>
                <li><a href="#">Sports game</a></li>
            </ul>
        </li>
        <li>
            <a href="/Instant-play/public/contact">Contact Us</a>
        </li>
        <li>
            <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
            @endif
        </li>
    </ul>
    <span class="left-ribbon"> </span>
    <span class="right-ribbon"> </span>
</div>
--}}
<div class="navigation">
    <a class="toggleMenu" href="#">Menu</a>
    <ul class="nav">
        <li>
            <a href="/Instant-play/public">Home</a>
        </li>
        <li  class="test">
            <a href="#">Action</a>
            <ul>
                <li><a href="#">Platform games</a></li>
                <li><a href="#">Shooter games</a></li>
                <li><a href="#">Fighting</a></li>
                <li><a href="#">Beat them all</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Action-adventure</a>
            <ul>
                <li><a href="#">Stealth game</a></li>
                <li><a href="#">Survival horror</a></li>
                <li><a href="#">Metroidvania</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Adventure</a>
            <ul>
                <li><a href="#">Text adventures</a></li>
                <li><a href="#">Graphic adventures</a></li>
                <li><a href="#">Visual novels</a></li>
                <li><a href="#">Interactive movie</a></li>
                <li><a href="#">Real-time 3D adventures</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Role-playing</a>
            <ul>
                <li><a href="#">Action RPG</a></li>
                <li><a href="#">MMORPG</a></li>
                <li><a href="#">Roguelike</a></li>
                <li><a href="#">Tactical RPG</a></li>
                <li><a href="#">Sandbox RPG</a></li>
                <li><a href="#">Choices</a></li>
                <li><a href="#">Fantasy</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Strategy</a>
            <ul>
                <li><a href="#">4X game</a></li>
                <li><a href="#">Artillery game</a></li>
                <li><a href="#">RTS</a></li>
                <li><a href="#">MMORTS</a></li>
                <li><a href="#">Tower defense</a></li>
                <li><a href="#">Turn-based strategy</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Simulation</a>
            <ul>
                <li><a href="#">Construction and management simulation</a></li>
                <li><a href="#">Life simulation</a></li>
                <li><a href="#">Vehicule simulation</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Sports</a>
            <ul>
                <li><a href="#">Racing</a></li>
                <li><a href="#">Sports game</a></li>
            </ul>
        </li>
        <li>
            <a href="/Instant-play/public/contact">Contact Us</a>
        </li>
        <li>
            <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{----}}
                {{--</ul>--}}
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </li>
            @endif
            </li>
    </ul>
    <span class="left-ribbon"> </span>
    <span class="right-ribbon"> </span>
</div>