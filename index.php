<?php get_header(); ?>

<div class="mainWrapper">

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            // Hier kommt dein Inhalt
            the_content();

        } // end while
    } // end if
    ?>

</div><!-- /. mainWrapper -->


<div class="mainWrapper">

    <div class="cc_contentWrap">
        <div class="cc_col12">
            <h4>Grid System</h4>
        </div>
    </div>

    <div class="cc_contentWrap">

        <div id="theSlider" class="slider">
            <ul class="slides">
                <li><img src="http://placehold.it/960x300/" alt="sliderpreview" /></li>
                <li><img src="http://placehold.it/960x300/000/fff/" alt="sliderpreview" /></li>
                <li><img src="http://placehold.it/960x300/fff/000/" alt="sliderpreview" /></li>
            </ul>
        </div>

    </div>


    <div class="cc_contentWrap">
        <div class="cc_col6">6</div>
        <div class="cc_col6">

            <div class="cc_contentWrap">
                <div class="cc_col4">4</div>
                <div class="cc_col4">4</div>
                <div class="cc_col4">4</div>
            </div>

        </div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col4">4</div>
        <div class="cc_col4">4</div>
        <div class="cc_col4">4</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col3">3</div>
        <div class="cc_col3">3</div>
        <div class="cc_col3">3</div>
        <div class="cc_col3">3</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col2">2</div>
        <div class="cc_col2">2</div>
        <div class="cc_col2">2</div>
        <div class="cc_col2">2</div>
        <div class="cc_col2">2</div>
        <div class="cc_col2">2</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
        <div class="cc_col1">1</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col5">5</div>
        <div class="cc_col1">1</div>
        <div class="cc_col2">2</div>
        <div class="cc_col4">4</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col8">8</div>
        <div class="cc_col3">3</div>
        <div class="cc_col1">1</div>
    </div>

    <div class="cc_contentWrap">
        <div class="cc_col11">11</div>
        <div class="cc_col1">1</div>
    </div>

</div><!-- mainWrapper -->

<?php get_footer();?>