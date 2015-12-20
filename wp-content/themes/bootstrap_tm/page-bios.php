
<?php /* Template Name: Employee Bios Template*/ ?>
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
        <h3>No content for bios-list </h3>
        <?php } ?>
      </div>
      <!-- Dynamic -->
  </div>
  <div class="row">
    <?php 
      $args=[
        "post_type" => "bio"
      ];

      $the_query = new WP_Query($args);
    ?>

    <?php 
      if (have_posts() ){
        // -> is an object operator... similary to theQuery.have_posts() in js...
        while ( $the_query -> have_posts() ) {
          //iterate +1   
          $the_query -> the_post();
          $tn_id = get_post_thumbnail_id();        
          $tn_url = wp_get_attachment_image_src($tn_id, 'thumbnail-size',true);
    ?>

    <div class="col-xs-12 col-sm-12 col-md-8 ">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php echo $tn_url[0]; ?> " alt="<?php the_title(); ?>" class="center-block img-circle img-responsive">
            </div><!--/col--> 
            <div class="col-xs-12 col-sm-8">
              <style>p {padding-left: 20px;} h4 {padding: 10px; background: #eee;}</style>
              <?php the_content(); ?>
            </div><!--/col-->          
            <div class="clearfix"></div>
            </div><!--/row-->
          </div><!--/panel-body-->
        </div><!--/panel-->
      </div><!--/col--> 
      <?php }} ?>
    <!-- END -->
    </div><!--/row--> 
  </div> 
  <hr>
<?php get_footer(); ?>

