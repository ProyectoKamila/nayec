<?php $pagename = query_posts(array('post_type'=>'portada',''=>'','posts_per_page'=>4)); ?>
    <?php if(!empty($pagename)) {?>
       
<header>
    <div class="container-fluid sin-padding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul id="slider1">
                     <?php while(have_posts()){ the_post();?>
                          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                <li style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover; sin-padding">
                                    
                                </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php } ?>     