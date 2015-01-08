<?php if (is_front_page()) : ?>
<?php get_template_part('templates/content', 'home'); ?>
<?php endif; ?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
