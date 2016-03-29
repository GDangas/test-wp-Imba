<h2>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<p class="post-info">

  <!--Adds metadata to each post with clickable links to author or category-->
  <?php the_time("F jS, Y "); ?> |  By:
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
      <?php the_author();?>
    </a>
    | Posted in
    <?php

    $categories = get_the_category();
    $separator =", ";
    $output = "";
    $lastElement = end($categories);

    if ($categories) {
      foreach ($categories as $category) {
        $output .= '<a href="'
                      . get_category_link($category->term_id) .'">'
                        . $category->cat_name .
                    '</a>';
        //Dont place separator if last tag
        if(sizeof($categories)>1 and ($category != $lastElement)) {
          $output .= $separator;
        }
      }
      echo $output;
    }

     ?>
</p>
<!--End of add metadata-->

<!--Post thumbnail-->
<article class="post">
  <div class="post-thumbnail">
    <?php the_post_thumbnail('small-thumbnail'); ?>
  </div>

<?php if (is_search()) { ?>
  <!--Modifying the Excerpt-->
  <p>
    <?php echo get_the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Read more&raquo</a>
  </p>
<?php } else {
   the_content();
} ?>


</article>
