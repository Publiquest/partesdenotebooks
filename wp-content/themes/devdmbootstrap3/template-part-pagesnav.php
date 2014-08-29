<?php if ( has_nav_menu( 'pages_menu' ) ) : ?>
<div class="nav-full-width-bg">
    <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-pages-collapse">
                            <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'pages_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-pages-collapse',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
            </nav>
    </div>
</div>
<?php endif; ?>