<?php $postNumber = 0; while(have_posts()) : the_post(); $postNumber++; ?>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  
  <?php if ( $postNumber == 1 ) { ?>

    <?php the_excerpt(); ?>

  <?php } ?>

<?php endwhile; ?>