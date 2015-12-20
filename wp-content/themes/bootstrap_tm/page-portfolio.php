
<?php /* Template Name: Portfolio Grid Template*/ ?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
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
        <h3>No content for portfolio </h3>
        <?php } ?>
      </div>
    </div>
    
    <div class="row">
      <?php 
        $args=[
          "post_type" => 'portfolio'
        ];

        $the_query = new WP_Query($args);

      ?>

      <?php if ( have_posts() ){ 
            while( $the_query->have_posts() ){ 
              $the_query->the_post();
              $tn_id = get_post_thumbnail_id();
              $tn_url = wp_get_attachment_image_src($tn_id, 'thumbnail-size',true);

      ?>

      <div class="col-sm-3 col-md-4 portfolio-piece">
        <a href="<?php the_permalink(); ?>" >
          <p><img src="<?php echo $tn_url[0]; ?> " alt="<?php the_title(); ?>"></p>
          <h3><?php the_title(); ?></h3>
          <p><?php the_permalink(); ?></p>
        </a>
      </div>
      <?php }} ?>
    </div>

  </div> 

<?php get_footer(); ?>


