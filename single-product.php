<?php get_header(); ?>

<div id="main">
  <div id="posts">
  <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="posts">
          <h2 class="title"><?php the_title(); ?></h2>
          <!--<?php if(has_post_thumbnail()) : ?>
            <div class="post-thumb">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
            </div>
          <?php endif;?>-->

          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
  <?php endif;?>
  </div>
</div>

<?php get_footer(); ?>
