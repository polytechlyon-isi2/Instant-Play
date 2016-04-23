<?php
/**
 * Created by PhpStorm.
 * User: GregoirePiat
 * Date: 08/03/16
 * Time: 14:45
 */
?>

<!DOCTYPE HTML>
<head>
    <title>InstantPlay - You click, you play</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/> -->
</head>
<body>
<div class="header">
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="{{base_path()}}/public"><img src="<?php echo asset('images/logo.png')?>" alt="" /></a>
            </div>
            <div class="header_top_right">
            </div>
            <div class="clear"></div>
        </div>

        @include('imports.nav')

        <div class="header_bottom">
            <div class="slider-text">
                <h2>Instant Play <br/>You click, you play</h2>
                <p>Buy CD keys for PC games<br/> Lowest prices of the world.</p>
                <a href="{{url('/moreInfo')}}">More info</a>
            </div>
            <div class="slider-img">
                <img src="<?php echo asset('images/slider-img.png')?>" alt="" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>