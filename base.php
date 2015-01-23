<?php get_template_part('templates/head'); ?>
<body class="left-sidebar">



<div class="toolbar desktop">
	<div class="wrapper">
		<ul class="whether">
			<li>
				<a href="#">
					<span>Санкт-Петербург</span>
					<i class="fa fa-chevron-down"></i>
				</a>
			</li>
			<li>
				<span>&ndash; 5&deg;C</span>
				<i class="fa fa-cloud"></i>
			</li>
		</ul>
		<ul class="kurs">
			<!--<li>-->
			<!--<i class="fa fa-tint"></i>-->
			<!--<label><span>48.60</span><i class="fa fa-dollar"></i></label>-->
			<!--</li>-->
			<li>
				<i class="fa fa-dollar"></i>
				<label><span>65.76</span> <i class="fa fa-angle-down"></i></label>
			</li>
			<li>
				<i class="fa fa-euro"></i>
				<label><span>76.15</span> <i class="fa fa-angle-up"></i></label>
			</li>
		</ul>
	</div>
</div>

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
