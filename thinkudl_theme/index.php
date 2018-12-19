<?php get_header();
      $args = array(
      'posts_per_page' => 5,
      'offset'         => 0,
      'category_name'  => 'episodes',
      'orderby'        => 'date',
      'order'          => 'DESC',
    );
    $posts_array = get_posts( $args );
?>
<div id="content_wrapper">
  <section id="about">
    <p>ThinkUDL is a podcast about Universal Design for Learning where we hear from the people who are designing and implementing strategies in post-secondary settings with learner variability in mind.</p>
    <p>Join host, Lillian Nave, as she discovers not just <strong>WHAT</strong> her guests are teaching, learning, guiding and facilitating, but <strong>HOW</strong> they design and implement it, and <strong>WHY</strong> it even matters!</p>
  </section>
  <section id="latest_episodes">
    <h1>Latest Episodes</h1>
    <div id="episodes_wrapper">
  <?php 
  if ( $posts_array ) {
    foreach ($posts_array as $post) :    
      setup_postdata( $post ); ?>
      <article class="episode_card">
        <div class="episode_thumbnail_wrapper">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          } else { ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/episode_thumb.png" />
          <?php } ?>
        </div>
        <div class="episode_description_wrapper">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </div>
      </article>
  <?php
    endforeach;
    wp_reset_postdata();
  }
  ?>
    </div>
  </section>
  <aside id="links">
    <section id="podcast_subscriptions">
      <h1>Subscribe</h1>
      <div class="platform_icon">
        <a href="https://itunes.apple.com/us/podcast/think-udl/id1445933224" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/platforms/apple_icon.png" /></a>
      </div>
      <div class="platform_icon">
        <a href="https://play.google.com/music/m/I2hi3ppbvl44w4kmakrltrare3e?t=Think_UDL" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/platforms/google-play-badge.png" /></a>
      </div>

    </section>
    <section id="social_media">
      <h1>Follow Us</h1>
      <div class="social_icon">
        <a href="https://www.facebook.com/Think-UDL-1030019387173268/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/social/fb_icon.png" /></a>
      </div>
      <div class="social_icon">
        <a href="https://www.instagram.com/thinkudl/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/social/ig_icon.png" /></a>
      </div>
      <div class="social_icon">
        <a href="https://twitter.com/thinkudl" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icons/social/twitter_icon.png" /></a>
      </div>
      <div class="social_icon">
        <img src="<?php bloginfo('template_directory'); ?>/images/icons/social/yt_icon.png" />
      </div>
    </section>
  </aside>
</div>
<?php get_footer(); ?>
