<?php get_header(); ?>

<?php get_template_part('template-part', 'pagesnav'); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="background">
    <div class="container"><!-- start content container -->
      <div class="row dmbs-content">
            <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

                <?php // theloop
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                        // single post
                        if ( is_single() ) : ?>

                            <div <?php post_class(); ?>>

                                <h2 class="page-header"><?php the_title() ;?></h2>

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(); ?>
                                    <div class="clear"></div>
                                <?php endif; ?>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                                <?php //get_template_part('template-part', 'postmeta'); ?>
                                <?php comments_template(); ?>

                            </div>
                    <?php  endif; ?>

                <?php endwhile; ?>
                    <?php posts_nav_link(); ?>
                <?php else: ?>
                    <?php get_404_template(); ?>
                <?php endif; ?>
            </div>
       </div>
    </div><!-- end content container -->
</div>

<?php get_footer(); ?>

