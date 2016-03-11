<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 11:11
 */
?>

@extends('layouts.preview')

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
    <li>
        <img class="etalage_thumb_image" src="images/preview-small-img3.png"  />
        <img class="etalage_source_image" src="images/preview-large-img3.jpg" />
    </li>
    <li>
        <img class="etalage_thumb_image" src="images/preview-small-img4.png" />
        <img class="etalage_source_image" src="images/preview-large-img4.jpg" />
    </li>
@endsection

@section('product-info')
    <h2>Whirlpool LTE5243D 3.4 CuFt.... </h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <div class="price">
        <p>Price: <span>$839.93</span></p>
    </div>
    <div class="available">
        <ul>
            <li><span>Model:</span> &nbsp; Model 1</li>
            <li><span>Shipping Weight:</span>&nbsp; 75.58 kg</li>
            <li><span>Units in Stock:</span>&nbsp; 566</li>
        </ul>
    </div>
@endsection

@section('product-color')
    <li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
    <li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
    <li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
    <li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
@endsection

@section('product-specifications')
    <ul>
        <li><span class="specification-heading">Body type</span> <span>Metal</span><div class="clear"></div></li>
        <li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
        <li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
        <li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
        <li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
        <li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
        <li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
        <li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
        <li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
        <li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
    </ul>
@endsection

@section('product-tags')
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <h4>Add Your Tags:</h4>
    <div class="input-box">
        <input type="text" value="">
    </div>
    <div class="button"><span><a href="#">Add Tags</a></span></div>
@endsection

@section('review')
    <h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
    <ul>
        <li>Price : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
        </li>
        <li>Value : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
        <li>Quality : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
    </ul>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <div class="your-review">
        <h4>How Do You Rate This Product?</h4>
        <p>Write Your Own Review?</p>
        <form>
            <div>
                <span><label>Nickname<span class="red">*</span></label></span>
                <span><input type="text" value=""></span>
            </div>
            <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
                <span><input type="text" value=""></span>
            </div>
            <div>
                <span><label>Review<span class="red">*</span></label></span>
                <span><textarea> </textarea></span>
            </div>
            <div>
                <span><input type="submit" value="SUBMIT REVIEW"></span>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        /* place inside document ready function */
        $(".rating").starRating({
            minus: true // step minus button
        });
    </script>
@endsection