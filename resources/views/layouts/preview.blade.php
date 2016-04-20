<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 10:57
 */
?>

@include('imports.header')
<div class="main">
    <div class="wrap">
        <div class="preview-page">
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <ul class="back-links">
                        @yield('back-links')
                    </ul>
                    <div class="product-details">
                        <div class="grid images_3_of_2">
                            <ul id="etalage">
                                @yield('product-images')
                            </ul>
                        </div>
                        <div class="desc span_3_of_2">
                            @yield('product-info')
                            <div class="share-desc">
                                <div class="share">
                                    <p>Number of units :</p><input type="number" class="text_box" type="text" value="1" min="1" />
                                </div>
                                <div class="button"><span><a href="#">Add to Cart</a></span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="colors-share">
                                <div class="social-share">
                                    <h4>Share Product</h4>
                                    <ul>
                                        <li><a class="share-face" href="#"> </a></li>
                                        <li><a class="share-twitter" href="#"> </a></li>
                                        <li><a class="share-google" href="#"> </a></li>
                                        <li><a class="share-rss" href="#"> </a></li>
                                        <div class="clear"> </div>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="product_desc">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Informations</li>
                                <li>Specifications</li>
                                <li>Videos</li>
                                <li>Reviews</li>
                                <div class="clear"></div>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="product-specifications">
                                    @yield('product-informations')
                                </div>
                                <div class="product-specifications">
                                    <ul>
                                        <li><span class="specification-heading">Operating System (OS):</span> <span>@yield('spec-os')</span><div class="clear"></div></li>
                                        <li><span class="specification-heading">CPU:</span> <span>@yield('spec-cpu')</span><div class="clear"></div></li>
                                        <li><span class="specification-heading">GPU:</span> <span>@yield('spec-gpu')</span><div class="clear"></div></li>
                                        <li><span class="specification-heading">RAM:</span> <span>@yield('spec-ram')</span><div class="clear"></div></li>
                                        <li><span class="specification-heading">HDD space:</span> <span>@yield('spec-hdd')</span><div class="clear"></div></li>
                                    </ul>
                                    @yield('product-specifications')
                                </div>

                                <div class="product-video">
                                    @yield('product-videos')
                                </div>

                                <div class="review">
                                    @yield('review')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('imports.rightsidebar')
            </div>
        </div>
    </div>
    <div class="content_top">
        @include('imports.topbar_recently_viewed')
    </div>
</div>
<script src="<?php echo asset('js/easyResponsiveTabs.js')?>" type="text/javascript"></script>
<link href="<?php echo asset('css/easy-responsive-tabs.css')?>" rel="stylesheet" type="text/css" media="all"/>
@include('imports.footer')
