<?php get_header(); ?>

<div id="main">
  <?php if(!has_no_sidebar()) { get_sidebar(); } ?>

	  <?php if (have_posts()) : ?>
	      <?php if (is_category()) { ?>
	        <h1><?php single_cat_title(); ?></h1>
		<?php echo category_description(); ?>
	      <?php } else if(is_month()) { ?>
	        <h1><?php the_time('F, Y'); ?></h1>
	      <?php } else if(is_post_type_archive()) {?>
		<h1><?php post_type_archive_title() ?></h1>
	 	<?php $post_type = $wp_query->get_queried_object(); ?>
		<p><?php echo $post_type->description; ?></p>
	      <?php } ?>
	    <?php endif; ?>
