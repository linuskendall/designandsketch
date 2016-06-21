<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
  <h1>Search results for <?php the_search_query() ?></h1>
  <?php if (have_posts()) : ?>
    <?php if (is_category()) { ?>
      <h2><?php single_cat_title(); ?></h2>
    <?php } else if(is_month()) { ?>
      <h2><?php the_time('F, Y'); ?></h2>
    <?php } ?>

    <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post() ?>
        <div <?php post_class() ?>>
          <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
          <?php the_content('');?>
        </div>
      <?php endwhile; ?>
      <div class="pagination">
        <ul>
          <li class="older"><?php next_posts_link('Older'); ?></li>
          <li class="newer"><?php previous_posts_link('Newer');?></li>
        </ul>
      </div>
    <?php else : ?>
      <h2>Nothing Found</h2>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <p><a href="<?php echo get_option('home')?>">Return to the homepage</a></p>
    <?php endif; ?>
 </div>

 <?php get_footer(); ?>
