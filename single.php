<?php get_header(); ?>

<div id="main">
  <?php get_sidebar(); ?>
  <div id="posts">
  <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="posts">
          <h2 class="title"><?php the_title(); ?></h2>

          <?php the_content(); ?>

          <a name="comment"></a><?php comments_template(); ?>
        </div>
      <?php endwhile; ?>
  <?php endif;?>
  </div>
</div>

<?php get_footer(); ?>
