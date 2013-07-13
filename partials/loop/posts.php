<?php

$post_args = array(
    'post_type' => 'post',
);

$custom_posts = get_posts($post_args);

if($custom_posts) {

    foreach($custom_posts as $post) : setup_postdata($post);?>

        <h1><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>

    <?php endforeach;

}
else {
    echo '<p> Es gibt leider keine Beiträge</p>';
}

?>

<?php wp_reset_postdata(); // reset the query ?>
