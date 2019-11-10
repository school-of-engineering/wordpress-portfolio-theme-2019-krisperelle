<?php /* Template name: Front page */

$args = array(
  'post_type' => "project",
  'posts_per_page' => 3,
  'post_status' => "publish",
);
$posts = new WP_Query($args);
if ( $posts->have_posts() ) {
  while( $posts->have_posts() ) {
    $posts->the_post();

    print '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
  }
}
