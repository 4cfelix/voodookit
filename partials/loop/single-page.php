<?php
$postID = get_the_ID();
$post_args = array(
    'post_type' => 'page',
    'p' => $postID
);

$custom_posts = get_posts($post_args);

if($custom_posts) {

    foreach($custom_posts as $post) : setup_postdata($post);

        the_title('<h1>', '</h1>');
        the_content();

    endforeach;

}
else {
    echo '<p>Diese Seite hat leider keinen Inhalt</p>';
}
?>

<?php wp_reset_postdata(); // reset the query ?>