<?php get_header(); ?>
  <div id="content" class="clearfix">
  
    <div id="main" role="main">
      
      <?php get_template_part('loops/loop', 'single'); ?>
      
    </div><!-- #main -->
  
    <?php get_sidebar(); ?>
  
  </div><!-- #content -->
  
<?php get_footer(); ?>