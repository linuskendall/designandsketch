<?php get_header(); ?>


<div id="main">
  <div id="posts">
	  <?php if (have_posts()) : ?>
	      <?php if (is_category()) { ?>
	        <h2><?php single_cat_title(); ?></h2>
		<?php echo category_description(); ?>
	      <?php } else if(is_month()) { ?>
	        <h2><?php the_time('F, Y'); ?></h2>
	      <?php } ?>

	      <table style="width: 100%; vertical-align: top;">
	      <?php while(have_posts()) : the_post() ?>
		<tr <?php post_class() ?>>
		  <td>
			<?php if ( has_post_thumbnail() ) : ?>
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
			    </a>
			<?php endif; ?>
		  </td>
		  <td>
			  <a href="<?php the_permalink();?>"><?php the_title();?></a>
		  </td>
		  <td>
			  <?php the_excerpt('');?>
 		  </td>
		  <td>
		       <?php echo get_post_meta(get_the_ID(), 'price', true);?>
		  </td>
		  <td>
			<?php 
			$order_form = get_post_meta(get_the_ID(), 'order-form', true);
			if($order_form) :
			?>
			<a href="<?php echo $order_form ?>">Order</a>
			<?php endif; ?>
		  </td>
		</tr>
	      <?php endwhile; ?>
              </table>
           <?php else : ?>
	     <h2>Nothing Found</h2>
	      <p>Sorry, but you are looking for something that isn't here.</p>
	      <p><a href="<?php echo get_option('home')?>">Return to the homepage</a></p>
	    <?php endif; ?>
	</div>
 	<div class="clear"></div>	
 </div>

 <?php get_footer(); ?>
