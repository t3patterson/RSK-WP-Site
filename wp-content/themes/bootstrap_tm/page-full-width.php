
<?php /* Template Name: Full Width Template*/ ?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if (have_posts()) { 
            while( have_posts() ) : the_post(); ?> 
            <div class="page-header">
              <h1> 
              <?php the_title(); ?>
              </h1>
            </div>
            <?php the_content(); ?>
        <?php endwhile; 
        } else { ?>
        <h3>No content here</h3>
        <?php } ?>
      </div>
    


  </div> 

<?php get_footer(); ?>


