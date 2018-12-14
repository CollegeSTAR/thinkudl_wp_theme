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
<section id="about">
  <p>ThinkUDL is a podcast about Universal Design for Learning where we hear from the people who are designing and implementing strategies in post-secondary settings with learner variability in mind.</p>
  <p>Join host, Lillian Nave, as she discovers not just <strong>WHAT</strong> her guests are teaching, learning, guiding and facilitating, but <strong>HOW</strong> they design and implement it, and <strong>WHY</strong> it even matters!</p>
</section>
<section id="episodes">
  <h1>Episodes</h1>
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
    <p>Podcast links here</p>
  </section>
  <section id="social_media">
    <h1>Follow Us</h1>
    <p>Social Media Links here.</p>
  </section>
</aside>
<?php get_footer(); ?>
