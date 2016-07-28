<?php
/*
  Template Name: Single page
*/
?>
<?php get_header(); ?>
<div class="row">
  <div class="col-xs-12 col-sm-8 page-content">
    <?php if(have_posts()):
      while( have_posts() ): the_post(); ?>
        <?php get_template_part('content', 'staticpage'); ?>
      <?php endwhile;
    endif;
    ?>
  </div>
  <div class="col-xs-12 col-sm-4">
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
