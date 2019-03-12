<?php get_header();
      $args = array(
      'posts_per_page' => 10,
      'offset'         => 0,
      'category_name'  => 'episodes',
      'orderby'        => 'date',
      'order'          => 'DESC',
    );
    $posts_array = get_posts( $args );
?>
<section id="breadcrumb">
  <a href="/">Home</a> &raquo; Episodes
</section>
<div id="content_wrapper">
  <section id="episodes_index">
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
</div>
<?php get_footer(); ?>
