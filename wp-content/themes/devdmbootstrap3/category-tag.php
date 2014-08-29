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
<div class="container">
    <div class="row dmbs-content">
        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
        <?php

             $term_slug = get_queried_object()->slug;
             print_r($term_slug);
             $args=array(
                    'post_type' => 'productos',
                    'post_status' => 'publish',
                    'category_name' =>$term_slug,
            );
            $productos = new WP_Query($args);
            if ($productos->have_posts()):?>
            <?php while ($productos->have_posts()): $productos->the_post(); ?>
              <div class="col-sm-2 col-md-3">
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
    </div>
</div>
<!-- end content container -->

<?php get_footer(); ?>
