<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php  wp_head(); ?>
    </head>
  <body>

<?php get_header();
/**
* get_header, get_footer and
* get_sidebar will include
* header.php, footer.php
* at the call site.
*/
if( have_posts() ){
    <div class="site-container">

    while( have_posts() ){
        the_post();
        /* Display the title of the post */
?>
<h1 class="site-title"><?php the_title(); ?></h1>
<?php
  /* Display the content of the post */
  echo "<article>"
  the_content();
  echo "</article>"
?>
  /* Get the permalink to the post */
  <a href"the_permalink();">Read more about <?php the_title();?></a>
    }
    </div> <!-- .site-container -->
}
get_footer();
?>


<?php
    echo '<p>Which came first?</p>';
?>

<footer>
  © copyright -Template maker inc.
</footer>
<?php wp_footer(); ?>
 </body>
 </html>
