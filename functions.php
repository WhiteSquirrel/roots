<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);



if( ! function_exists('it_recommend_posts') ) {

	function it_recommend_posts(){


        $post_array = array(
                'posts_per_page'        => 2,
                'order'                 => 'DESC',
                'post_status'           => 'publish',
                'ignore_sticky_posts'   => 1
            );

		 $r = new WP_Query( $post_array );

	        if ($r->have_posts()) :
              $i=0;
              ?>

              <?php

              while ($r->have_posts()) :
                $r->the_post();

							?>
		<div class="half"><div class="">
		<div class="entry-thumbnail pull-left">
                                    <a class="thumbnail" href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail' ); ?>
                                    </a>
                                </div>
		<p class="pull-left">
		<small><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a></small>
		<p>
		<div class="clearfix"></div>
		</div></div>

              <?php
                $i++;
                endwhile;
               ?>
		<div class="clearfix"></div>
                <?php

            wp_reset_postdata();
          endif;


	}

}





if( ! function_exists('it_recommend_posts') ) {

	function it_recommend_posts(){


        $post_array = array(
                'posts_per_page'        => 2,
                'order'                 => 'DESC',
                'post_status'           => 'publish',
                'ignore_sticky_posts'   => 1
            );

		 $r = new WP_Query( $post_array );

	        if ($r->have_posts()) :
              $i=0;
              ?>

              <?php

              while ($r->have_posts()) :
                $r->the_post();

							?>
		<div class="half"><div class="">
		<div class="entry-thumbnail pull-left">
                                    <a class="thumbnail" href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail' ); ?>
                                    </a>
                                </div>
		<p class="pull-left">
		<small><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a></small>
		<p>
		<div class="clearfix"></div>
		</div></div>

              <?php
                $i++;
                endwhile;
               ?>
		<div class="clearfix"></div>
                <?php

            wp_reset_postdata();
          endif;


	}

}