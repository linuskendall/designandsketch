<?php if(!have_posts()) : ?>
     <h2>Nothing Found</h2>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <p><a href="<?php echo get_option('home')?>">Return to the homepage</a></p>
    <?php endif; ?>
</div>
<?php if(!$no_sidebar) : ?>
<div class="clear"></div>	
<?php endif; ?>

</div>

<?php get_footer(); ?>
