<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/12/19
 * Time: 5:29 PM
 */
?>
<style type="text/css">
    /* start block-hero */
    .block-hero {
        margin: 0 calc(50% - 50vw);
        min-height: 500px;
        text-align: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        position: relative; }
    @media screen and (max-width: 767px) {
        .block-hero {
            min-height: 0;
            background-image: none !important; } }
    .block-hero figure {
        display: block; }
    @media screen and (min-width: 768px) {
        .block-hero figure {
            display: none; } }
    .block-hero figure img {
        width: 100%; }
    .block-hero__intro {
        padding: 15px; }
    .block-hero__intro p {
        margin: 0; }
    @media screen and (min-width: 768px) {
        .block-hero__intro {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: 10%;
            padding: 15px; } }
    @media screen and (min-width: 1280px) {
        .block-hero__intro {
            bottom: 10%; } }
    @media screen and (min-width: 768px) {
        .block-hero__intro__inner {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px;
            max-width: 1100px;
            margin: 0 auto; } }
    @media screen and (min-width: 1024px) {
        .block-hero__intro__inner {
            font-size: 20px; } }
    @media screen and (min-width: 1280px) {
        .block-hero__intro__inner {
            font-size: 26px; } }

    /* end block-hero */
</style>
<div class="block-hero" style="background-image: url(<?php block_field( 'image-for-desktop' ); ?>);">
    <figure>
        <img src="<?php block_field( 'image-for-mobile' ); ?>" alt=""/>
    </figure>
    <div class="block-hero__intro">
        <div class="block-hero__intro__inner">
            <?php block_field( 'introduction' ); ?>
        </div>
    </div>
</div>
