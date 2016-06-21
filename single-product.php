<?php get_header(); ?>

<div id="main">
  <div id="products">
  <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="posts">
          <h2 class="title"><?php the_title(); ?></h2>
	  <p>Price: <?php echo get_post_meta(get_the_ID(), 'price', true);?></p>
	  <?php 
	  $order_form = get_post_meta(get_the_ID(), 'order-form', true);
	  if($order_form) :
	  ?>
		<p><a href="<?php echo $order_form ?>">Order</a></p>
	  <?php endif; ?>

          <?php the_content(); ?>

        </div>
      <?php endwhile; ?>
  <?php endif;?>
  </div>
</div>

<?php get_footer(); ?>
