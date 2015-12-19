  <?php get_header(); ?>
    <div class="jumbotron front-page">
      <div class="container ">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
         <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="container-fluid fp-content-area">
      <div class="container">
      <!-- Example row of columns -->
        <div class="row">
          <div class="col-sm-12">
           <?php if ( dynamic_sidebar('company-desc') ); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
           <?php if ( dynamic_sidebar('front-left') ); ?>
          </div>
          <div class="col-md-4">
           <?php if ( dynamic_sidebar('front-center') ); ?>
          </div>
          <div class="col-md-4">
           <?php if ( dynamic_sidebar('front-right') ); ?>
          </div>
        </div>
      </div>
    </div> <!-- /container -->
<?php get_footer(); ?>
    