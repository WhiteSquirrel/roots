<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>


    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      	<?php if( has_post_thumbnail() && ! has_post_format('video') && ! has_post_format('audio') && ! has_post_format('gallery') ) : ?>
      		<div class="entry-thumbnail">
      			<?php the_post_thumbnail('small'); ?>
      		</div>
      	<?php endif; ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
