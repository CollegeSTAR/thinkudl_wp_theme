<?php get_header();
while ( have_posts() ) : the_post(); ?>
  <section id="breadcrumb">
    <a href="/">Home</a> &raquo; <a href="/episodes">Episodes</a> &raquo; <?php the_title(); ?>
  </section>
  <div id="content_wrapper">  
    <section id="episode-wrapper">
      <h2><?php the_title(); ?></h2> 
      <?php the_content(); ?>
    </section>
  <?php endwhile; ?>

<?php get_footer(); ?>
