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
    <title>Free Ecomm Template Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

   <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/> -->

    <script type="text/javascript" src="<?php echo asset('js/jquery-1.9.0.min.js')?>"></script>
    <script src="<?php echo asset('js/jquery.openCarousel.js')?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo asset('js/easing.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/move-top.js')?>"></script>
</head>
<body>
<div class="header">
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="<?php echo asset('images/logo.png')?>" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <span>Search</span>
                    <form>
                        <input type="text" value=""><input type="submit" value="">
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        @include('imports.nav')

        <div class="header_bottom">
            <div class="slider-text">
                <h2>Lorem Ipsum Placerat <br/>Elementum Quistue Tunulla Maris</h2>
                <p>Vivamus vitae augue at quam frigilla tristique sit amet<br/> acin ante sikumpre tisdin.</p>
                <a href="#">Sitamet Tortorions</a>
            </div>
            <div class="slider-img">
                <img src="<?php echo asset('images/slider-img.png')?>" alt="" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>