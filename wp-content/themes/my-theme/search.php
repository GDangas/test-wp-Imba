<?php

  get_header();

  if (have_posts()):

      while(have_posts()) : the_post(); ?>

          <h2>Sökresultat: </h2>
        <?php get_template_part('content');

      endwhile;

      else :
        echo "<p>No content found</p>";

      endif;

    get_footer();

 ?>
