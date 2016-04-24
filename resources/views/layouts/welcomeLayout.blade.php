<?php
/**
 * Created by PhpStorm.
 * User: GregoirePiat
 * Date: 24/04/16
 * Time: 14:48
 */
 ?>

@include('imports.header')
<div class="main">
    <div class="content">
        {{--
        <div class="content_top">
            @include('imports.content_top')
        </div>
        --}}
        <div class="content_bottom">
            <div class="wrap">
                <div class="content-bottom-left">
                    @include('imports.content-bottom-left')
                </div>
                <div class="content-bottom-right">
                    @yield('content')
                </div>

                <div class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
@include('imports.footer')
