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
    <title>Free Ecomm Template Website Template | Preview :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="{{url('/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{url('/js/jquery-1.9.0.min.js')}}"></script>
    <script src="{{url('/js/jquery.openCarousel.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('/js/easing.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/move-top.js')}}"></script>
    <script src="{{url('/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
    <link href="{{url('/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <link rel="stylesheet" href="{{url('/css/etalage.css')}}">
    <script src="{{url('/js/jquery.etalage.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>
    <script src="{{url('/js/star-rating.js')}}" type="text/javascript"></script>
</head>
<body>
<div class="header">
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!------------End Header ------------>
<body>
<div class="header">
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="/Instant-play/public"><img src="<?php echo asset('images/logo.png')?>" alt="" /></a>
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
                <h2>Instant Play <br/>You click you play</h2>
                <p>Buy CD keys for PC games<br/> Lowest prices of the world.</p>
                <a href="#">More info</a>
            </div>
            <div class="slider-img">
                <img src="<?php echo asset('images/slider-img.png')?>" alt="" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>










<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="{{url('/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="{{url('/js/jquery-1.9.0.min.js')}}"></script>
<script src="{{url('/js/jquery.openCarousel.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('/js/easing.js')}}"></script>
<script type="text/javascript" src="{{url('/js/move-top.js')}}"></script>
<script src="{{url('/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<link href="{{url('/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<link rel="stylesheet" href="{{url('/css/etalage.css')}}">
<script src="{{url('/js/jquery.etalage.min.js')}}"></script>
<script>
    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });

    });
</script>
<script src="{{url('/js/star-rating.js')}}" type="text/javascript"></script>