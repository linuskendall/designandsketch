<?php global $no_sidebar; $no_sidebar=true; get_template_part('archive-header') ;?>
	      <?php while(have_posts()) : the_post() ?>
		<div class="product <?php get_post_class() ?>">
		  <div class="product-thumbnail">
		    <?php
			$carousel_id = get_post_meta(get_the_ID(), 'image-id', true);
		    ?>
		    <a href="<?php the_permalink(); ?><?php echo ($carousel_id ? '#jp-carousel-'.$carousel_id : '') ?>" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('product-thumbnail'); ?>
			<?php else : ?>
			    <img class´"product-thumbnail" src="<?php bloginfo('template_directory'); ?>/pics/placeholder1-1024x769.png"/>
			<?php endif; ?>
		    </a>
		  </div>
		  <div class="product-description">
			  <a href="<?php the_permalink();?>"><h2 class="title"><?php the_title();?></h2></a>
			  <?php the_excerpt('');?>
		  </div> 
		  <div class="product-order">
		          <p>Price: <?php echo get_post_meta(get_the_ID(), 'price', true);?></p>
			  <?php 
				$order_form = get_post_meta(get_the_ID(), 'order-form', true);
				if($order_form) :
				?>
	                  <?php endif; ?>

			<a href="<?php echo $order_form ?>">Order</a>
		   </div>
		</div>
	      <?php endwhile; ?>
<?php get_template_part('archive-footer.php'); ?>
