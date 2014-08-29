<?php
/*
    Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'pagesnav'); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="background">
  <div class="container"><!-- start content container -->
      <div class="row dmbs-content">
          <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="page-header">Resultados de busca</h2>
                </div>
              </div>
          <?php
                global $query_string;
                $query_args = explode("&", $query_string);
                $s = explode("=", $query_args[0]);
                $search_query = array();
                foreach($query_args as $key => $string) {
                    $query_split = explode("=", $string);
                    $search_query[$query_split[0]] = urldecode($query_split[1]);
                } // foreach

              $busqueda = new WP_Query($search_query);
              if ($busqueda->have_posts()):?>
              <div class="row">
              <?php while ($busqueda->have_posts()): $busqueda->the_post(); ?>
                <div class="col-xs-6 col-sm-4 col-md-3">
                  <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
                    </a>
                    <div class="caption">
                      <h4><?php the_title(); ?></h4>
                      <p></p>
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
