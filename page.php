<?php get_header(); ?>

<div id="main">
  <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="posts">
          <h2 class="title"><?php the_title(); ?></h2>

          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
  <?php endif;?>
</div>

<?php get_footer(); ?>
