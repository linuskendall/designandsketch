<?php get_template_part('archive-header') ;?>
  <div id="posts">

<?php while(have_posts()) : the_post() ?>
<div <?php post_class() ?>>
  <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  <?php the_content('');?>

  <a href="<?php the_permalink();?>#comment">Comment &gt;&gt;</a>
</div>
<?php endwhile; ?>
</div>

<?php get_template_part('archive-footer') ;?>
