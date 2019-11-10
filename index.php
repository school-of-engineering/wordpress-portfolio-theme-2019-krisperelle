<?php get_header();
if( have_posts() ){
echo '<div class="site-container">';
    while( have_posts() ){
        the_post();
        /* Display the title of the post */
?>
<h1 class="site-title"><?php the_title(); ?></h1>
<?php
  /* Display the content of the post */
  echo "<article>";
  the_content();
  echo "</article>";
  /* Get the permalink to the post */
  print'<a>Read more about '.the_title().'</a>';
    }
    print '</div>';
}


get_footer();
