<?php /* Template name: Archive page */
get_header();
$terms = get_the_terms( get_the_ID(),'project');
// foreach ($terms as $term) {
// echo "<span>" . $terms->name . "| </span>";
// }
?>

<?php
$args = array(
  'post_type' => "project",
  'posts_per_page' => -1,
  'post_status' => "publish",
);
$posts = new WP_Query($args);
 print '<div class="wraper">';
if ( $posts->have_posts() ) {
  while( $posts->have_posts() ) {
    $posts->the_post();
    print '<li class="project">'. get_the_post_thumbnail(). '<a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
  }
}
print'</div>';


get_footer();
