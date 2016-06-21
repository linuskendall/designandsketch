<?php get_header(); ?>

<!--  <div id="sliderstuff">
    <script type="text/javascript">
    $(document).ready(function(){
    $('.bxslider').bxSlider({
      auto: true,
      adaptiveHeight: true
    });
    });
    </script>
    <ul class="bxslider">
      <li><img src="<?php bloginfo('template_url');?>/pics/planner.jpg"</li>
      <li><img src="<?php bloginfo('template_url');?>/pics/planner2.jpg" /></li>
    </ul>
  </div>

  <div id="introtext"> -->
<div id="main">
  <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="posts">
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; ?>
  <?php endif;?>
</div>
<!--   </div>

 <div id="homecolumns">
    <div id="homecol1">
      <div class="flowerholder">
        <img src="<?php bloginfo('template_url');?>/pics/flowerhomecol.svg">
      </div>
      <h2 class="outline" >Design in print</h2>
      <p>I am a freelance graphic designer with over 3 years experience in this field.</p>
      <p class="outline">See my portfolio <span class="bigarrow"> > </span> </p>
    </div>

    <div id="homecol2">
      <div class="flowerholder">
        <img src="<?php bloginfo('template_url');?>/pics/flowerhomecol.svg">
      </div>
      <h2 class="outline" >My store</h2>
      <p>This is an online boutique showcasing my handmade designs. And then this.</p>
      <p class="outline">See my portfolio <span class="bigarrow"> > </span></p>
    </div>
  </div> -->

<?php get_footer(); ?>
