<!DOCTYPE html>
<div class="slideshow-container">
    {foreach from=$bannerResult item=oneItem}
    <div class="mySlides fade">
        <img src="content/banner/{$oneItem.bannerName}.jpg" style="width:100%">
    </div>
    {/foreach}
</div>
<br>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>
<script src="js/slideshow.js"></script>