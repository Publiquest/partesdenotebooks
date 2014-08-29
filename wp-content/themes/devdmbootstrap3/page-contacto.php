<?php
/*
    Template Name: Contacto
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
           
            <?php // theloop
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <h2 class="page-header"><?php the_title() ;?></h2>
             <div class="col-xs-12 col-md-5">

             <h3 class="page-header">Formulario</h3> 
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>
            </div>
            <div class="col-md-7">
                <div class="row">
                 <?php
               $args=array(
                      'post_type' => 'contactos',
                      'post_status' => 'publish',
                      'orderby' =>'menu_order'
                );
              $contactos = new WP_Query($args);
              if ($contactos->have_posts()):?>
              <?php while ($contactos->have_posts()): $contactos->the_post(); 
                    $tipo = get_post_meta( get_the_ID(), 'tipo', true );
              ?>
                <?php if($tipo!="ninguno"): ?>
                <div class="col-xs-6 col-sm-4 col-md-6">
                  <h3 class="page-header"><?php echo $tipo;?></h3> 
                  <div class="thumbnail">
                    <div class="caption">
                      <h4><?php the_title(); ?></h4>
                       <p>Email:<br/><?php echo get_post_meta( get_the_ID(), 'email', true )?></p>
                       <?php if(get_post_meta( get_the_ID(), 'msn', true )):?>
                        <p>Messenger:<br/><?php echo get_post_meta( get_the_ID(), 'msn', true )?></p>
                       <?php endif; ?>
                        <?php if(get_post_meta( get_the_ID(), 'telefono', true )):?>
                        <p>Teléfono:<br/><?php echo get_post_meta( get_the_ID(), 'telefono', true )?></p>
                       <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php endif;?>
               <?php endwhile; ?>
              <?php endif; ?>
             </div>   
            </div>
        </div>
        </div>
    
    </div><!-- end content container -->
</div>
<?php get_footer(); ?>