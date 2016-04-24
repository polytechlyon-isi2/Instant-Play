<?php
/**
 * Created by PhpStorm.
 * User: GregoirePiat
 * Date: 08/03/16
 * Time: 14:47
 */
?>
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
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endif
        @if(Auth::check())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif
    </ul>
    <span class="left-ribbon"> </span>
    <span class="right-ribbon"> </span>
</div>