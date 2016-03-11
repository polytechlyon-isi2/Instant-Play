<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 10:57
 */
?>

@include('imports.header_preview')

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
                            <div class="wish-list">
                                <ul>
                                    <li class="wish"><a href="#">Add to Wishlist</a></li>
                                    <li class="compare"><a href="#">Add to Compare</a></li>
                                </ul>
                            </div>
                            <div class="colors-share">
                                <div class="color-types">
                                    <h4>Available Colors</h4>
                                    <form class="checkbox-buttons">
                                        <ul>
                                            @yield('product-colors')
                                        </ul>
                                    </form>
                                </div>
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
                                <li>Specifications</li>
                                <li>product Tags</li>
                                <li>Product Reviews</li>
                                <div class="clear"></div>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="product-specifications">
                                    @yield('product-specifications')
                                </div>

                                <div class="product-tags">
                                    @yield('product-tags')
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

@include('imports.footer')