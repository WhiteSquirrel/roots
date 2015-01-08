<article <?php post_class(); ?>>

  <header>
    <div class="entry-title">

     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <div class="entry-meta pull-right"><?php get_template_part('templates/entry-meta'); ?></div>
    </div>
  </header>
  <div class="entry-summary ">
    <?php the_excerpt(); ?>
  </div>

</article>
