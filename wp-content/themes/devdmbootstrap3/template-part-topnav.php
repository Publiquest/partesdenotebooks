<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
<div class="nav-full-width-bg">
<div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                        <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php $category_ids = get_all_category_ids(); ?>
                <div class="navbar-collapse navbar-1-collapse collapse">
                 <ul class="nav navbar-nav">
                <?php
                
                foreach($category_ids as $cat_id) :

                                    $tags = get_tags_from_category_post($cat_id);    
                                    $cat_name = get_cat_name($cat_id);
                                    $cat_link = get_category_link($cat_id);
                                    if($cat_id==1) {continue;}
                                    $active = (isset($_GET['cat']) and $_GET['cat']==$cat_id) ? 'active' :'';
                                    $dropdown = (isset($tags) and !empty($tags)) ? 'dropdown' :'';
                                    $retrive_tags=retrive_tags($tags,$cat_id,$cat_link);
                                    if(!empty($retrive_tags)):
                                    echo '<li class="'.$active.' '.$dropdown.'">
                                                <a href="'.$cat_link.'" class="navbar-link dropdown-toggle" data-toggle="dropdown" >'.$cat_name.'  <span class="caret"></span></a>
                                                 <ul class="dropdown-menu" role="menu"> '.retrive_tags($tags,$cat_id,$cat_link).'
                                                 </ul>   
                                         </li>';
                                    else:
                                        echo '<li id="" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a title="Servicio Técnico" href="'.$cat_link.'">'.$cat_name.'</a>
                                             </li>';
                                    endif;

                endforeach;
                ?>
                  </ul>
                </div><!--/.nav-collapse -->
        </nav>
    </div>
</div>
<?php endif; ?>