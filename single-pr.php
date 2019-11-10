<?php get_header();

if( have_posts() ){
    ?>
    <div class="site-container">
    <?php
    while( have_posts() ){
        the_post();
        /* Display the title of the post */
        ?>
        <h1 class="site-title"><?php the_title(); ?></h1>
        <?php

        /* Display the image of the post */
        echo "<div class='image_holder'>";
        the_post_thumbnail(grid_thumbnail);
        echo "</div>";

          /* Display the content of the post */
          echo "<div class='page_content_holder'>";
          the_content('<p>', '</p>');

          /* Display Project Skill */
          $terms = get_the_terms( get_the_ID(), 'project-skill' );
          if($terms){
          ?>
          <h3>Project Skills</h3>
          <?php
          foreach($terms as $term){
            echo $term->name;
          }
          }
          /* Display Project Type */
          $terms = get_the_terms( get_the_ID(), 'project-type' );
          if($terms){
          ?>
          <h3>Project Type</h3>
          <?php
          foreach($terms as $term){
            echo $term->name;
          }
          }

          echo "</div>"; //page_content_holder
    }
    ?>
    </div> <!-- .site-container -->
    <?php
}

get_footer();
