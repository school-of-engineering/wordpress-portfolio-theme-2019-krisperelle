<?php get_header();

$terms = get_the_terms( get_the_ID(),'wpproject');
// foreach ($terms as $term) {
// echo "<span>" . $terms->name . "| </span>";
// }
?>

<?php
if(have_posts() ){
?>
  <div class="gridcont">
  <?php
    while( have_posts() ){
        echo "<div class='grid_content'>";
        the_post();
        /* Display the title of the post */
  ?>
    <a class='links' href="<?php the_permalink(); ?>"><h1 class="site-title"><?php the_title(); ?></h1></a>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("post_image"); ?></a>
    <?php
        the_content();
        ?>
        <a class="permalink_button" href="<?php the_permalink(); ?> ">Read More About: <?php the_title(); ?></a>
        <?php echo "</div>";?>
        <?php
        }
    ?>
    </div>
    <?php
}


get_footer();










// get_header();
// if( have_posts() ){
// echo '<div class="site-container">';
//     while( have_posts() ){
        // the_post();
        /* Display the title of the post */
?>
<!-- <h1 class="site-title"> -->
  <?php 
  // the_title(); 
?>
<!-- </h1> -->
<?php
  /* Display the content of the post */
  // echo "<article>";
  // the_content();
  // echo "</article>";
  /* Get the permalink to the post */
//   print'<a>Read more about '.the_title().'</a>';
//     }
//     print '</div>';
// }


// get_footer();
