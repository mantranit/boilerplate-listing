<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/12/19
 * Time: 5:29 PM
 */
?>
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
