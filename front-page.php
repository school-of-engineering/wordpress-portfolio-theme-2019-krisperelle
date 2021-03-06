<?php /* Template name: Front page */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif;

$args = array(
  'post_type' => "project",
  'posts_per_page' => 3,
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
print '</div>';
get_footer();
