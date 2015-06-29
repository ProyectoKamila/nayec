<?php $pagename = query_posts(array('post_type'=>'portada',''=>'','posts_per_page'=>4)); ?>
    <?php if(!empty($pagename)) {?>
       
<header>
    <div class="container-fluid sin-padding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 alto-slider">
                <ul id="slider1">
                     <?php while(have_posts()){ the_post();?>
                          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                <li style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover; sin-padding">
                                    <div class="container">
                                        <div class="row">
                                           <div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4  col-sm-5 col-sm-offset-4 col-xs-12 cuadro-sli">
                                               <div class="cuadro-slider">
                                                     <?php if(get_field('titulo-fondo')){?>
                                                        <h2 class="slider-titulo1"><?php the_field('titulo-fondo');?> </h2>
                                                     <?php } ?>
                                                      <?php if(get_field('parrafo-fondo')){?>
                                                            <p class="slider-parrafo">
                                                              <?php the_field('parrafo-fondo');?> 
                                                            </p>
                                                     <?php } ?>
                                                      <?php if(get_field('boton-vermas')){?>
                                                     <a href=" <?php the_field('boton-vermas');?> "> <button type="button"  class="btn btn-primary slider-boton">VER MÁS</button></a>
                                                    <?php } ?>
                                                </div>
                                           </div>
                                       </div>
                                   </div>
                                </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
 <?php } wp_reset_query(); ?> 