 <div class="container">
    <div class="row dmbs-footer">
        <div class="col-md-3">
        <?php 
          
                    wp_nav_menu( array(
                            'theme_location'    => 'pages_menu',
                            'depth'             => 2,
                            'container'         => 'ul',
                            'container_class'   => '',
                            'menu_class'        => '',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
         ?>
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
        
        </div>
    </div>
</div>
<!-- end main container -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(

 $('.dropdown-toggle').click(function() {
    var dropdown= $(".dropdown:hover .dropdown-menu").css("display");
    $(window).resize(function(){
        dropdown= $(".dropdown:hover .dropdown-menu").css("display");
    });
        if( dropdown =='block'){
            console.log(dropdown);
            var location = $(this).attr('href');
            window.location.href = location;
            return false;
        }
    })
);
</script>
</body>
</html>