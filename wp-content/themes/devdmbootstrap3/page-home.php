<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'pagesnav'); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="background">
 <div class="container">
    <div class="row dmbs-content">
        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
            <div class="row">
              <div class="col-md-12">
                  <h2 class="page-header">Inicio</h2>
              </div>
            <?php
            $productos = new WP_Query('post_type=productos');
            if ($productos->have_posts()):?>
            <?php while ($productos->have_posts()): $productos->the_post(); ?>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="thumbnail">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
                  </a>
                  <div class="caption">
                    <h4><?php the_title(); ?></h4>
                    <p class="text-right"><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Detalle</a></p>
                  </div>
                </div>
              </div>
             <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <div class="row">
              <?php next_posts_link(); ?>
              <?php previous_posts_link(); ?>
            </div>
        </div>
    </div>
<!-- end content container -->
   </div>
</div>
<?php get_footer(); ?>
