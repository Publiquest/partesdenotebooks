<?php global $dm_settings; ?>

<?php if ($dm_settings['show_header'] != 0) : ?>
<div class="container">
    <div class="row dmbs-header">
        <?php if ( get_header_image() != '' ) : ?>
            <div class="col-xs-3 col-sm-6 col-md-6 dmbs-header-img">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
            </div>
        <?php endif; ?>
        <div class="col-xs-9 col-sm-6 col-md-6 dmbs-header-text">
           <form role="search" method="get" id="searchform" class="form-inline searchform" action="<?php echo home_url( '/' ); ?>">
                 <div class="col-xs-9 col-md-10">
                    <input type="search" class="form-control" id="search" required placeholder="Ingresá un producto, marca o número de artículo" value="" name="s" title="Buscar por ">
                    <input type="hidden" name="post_type" value="productos" />
                 </div>
                 <input type="submit" id="" class="btn btn-default" value="Buscar">
            </form>
        </div>
    </div>
</div>
<?php endif; ?>