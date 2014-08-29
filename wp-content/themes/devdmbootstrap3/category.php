<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'pagesnav'); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<?php $term_slug = get_queried_object()->slug;
$tag=(isset($_GET['tag'])) ? $_GET['tag'] : false;
 ?>
<div class="background">
  <div class="container"><!-- start content container -->
      <div class="row dmbs-content">
          <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="page-header"><?php echo category_header($term_slug,$tag);?></h2>
                </div>
              </div>
          
          <?php
               
               
               $args=array(
                      'post_type' => 'productos',
                      'post_status' => 'publish',
                      'category_name' =>$term_slug
                );
              if ($tag){$args['tag']=$tag;}
              $productos = new WP_Query($args);
              if ($productos->have_posts()):?>
              <div class="row">
              <?php while ($productos->have_posts()): $productos->the_post(); ?>
                <div class="col-xs-6 col-sm-4 col-md-3">
                  <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
                    </a>
                    <div class="caption">
                      <h4><?php the_title(); ?>                     
                      </h4>
                      <p class="text-right"><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Detalle</a></p>
                    </div>
                  </div>
                </div>
               <?php endwhile; ?>
               </div>
              <?php endif; ?>
              </div>
          </div>
      </div>
  </div><!-- end content container -->
</div>

<?php get_footer(); ?>
