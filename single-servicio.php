<!DOCTYPE html>
<html lang="es">
<head>
   <?php wp_head(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
                                    <title><?php wp_title(); ?></title>
    <!-- Bootstrap Core CSS -->
<link href="<?php bloginfo('template_url');?>/css/main.less" rel="stylesheet/less">
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
    <!-- Custom Fonts -->
<link href="<?php bloginfo('template_url');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="index>"
<div class="contenedor">
    <!-- Navigation -->
<div class="row">
<nav class=" navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header1 ">
<div class="navbar-header page-scroll ">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
<a class="navbar-brand1 page-scroll " href="#home"> 
<?php query_posts(array('post_type'=>'configuracion','posicion'=>'logo','posts_per_page'=>1))?>
<?php while(have_posts()){ the_post();?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <img src="<?php echo $feat_image;?>" class="img-responsive logo" alt="<?php the_title(); ?>">
<?php } ?>
                                </a>
                    <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-left menu ">
<li class="hidden">
<a href="#page-top"></a>
                            </li>
        <li>
            <a class="page-scroll tama" href="#servicios"><b>Servicios</b></a>
        </li>
        <li>
            <a class="page-scroll tama" href="#nosotros"><b>Nosotros</b></a>
        </li>
        <li>
            <a class="page-scroll tama" href="#blog"><b>Blog</b></a>
        </li>
        <li>
            <a class="page-scroll tama" href="#contacto"><b>Contacto</b></a>
        </li>
        </ul>
                         <!-- Redes sociales -->
                    
<ul class=" list-inline social-buttons redes-sociales col-md-6">
<li><a href="#"><i class="fa fa-facebook face"></i></a>
                            </li>
<li><a  href="#"><i class="fa fa-twitter twi"></i></a>
                            </li>
<li><a href="#"><i class="fa fa-linkedin in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
    </div>
    <?php $pagename = query_posts(array('post_type'=>'portada',''=>'','posts_per_page'=>4)); ?>
    <?php if(!empty($pagename)) {?>
       
    <header >
        <div id="wrapper01">
            <ul id="slider1">
                 <?php while(have_posts()){ the_post();?>
                  <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                <li style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover; sin-padding">
               
                    <div class="cuadro-slider">
                         <?php if(get_field('titulo-fondo')){?>
                            <h2 class="slider-titulo1"><?php the_field('titulo-fondo');?> </h2>
                             <?php } ?>
                              <?php if(get_field('parrafo-fondo')){?>
                        <p class="slider-parrafo">
                           <?php the_field('parrafo-fondo');?> 
                        </p>
                         <?php } ?>
                        <button type="button" class="btn btn-primary slider-boton">VER MÁS</button>
                    </div>
                </li>
                
             <?php } ?>

            </ul>
        </div>
    </header>
<?php } ?>     
    

         






    
 <!-- Contact Section -->
 <?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <h2 class="section-heading contacto-emca"><?php the_title();?></h2>
                       <?php if(get_field('contacto-texto1')){?>
                            <h3 class="subtitu"><?php the_field('contacto-texto1');?></h3>
                         <?php } ?>
                        <?php if(get_field('contacto-texto2')){?>
                            <h3 class="subtitu1"><?php the_field('contacto-texto2');?></h3>
                         <?php } ?>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 formu">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="subtitu4">NOMBRE Y APELLIDO</h3>
                                    <input type="text" class="form-control" placeholder="Nombre y apellido *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <h3 class="subtitu4">EMAIL</h3>
                                    <input type="email" class="form-control" placeholder=" Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                       <h3 class="subtitu4">TELÉFONO </h3>
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     <h3 class="subtitu4">MENSAJE</h3>
                                    <textarea class="form-control area" placeholder="Mensaje*" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                
                                <button type="button" class="btn btn-success">ENVIAR</button>
                                                       <?php if(get_field('contacto-texto3')){?>
                                 <h3 class="subtitu"><?php the_field('contacto-texto3');?></h3>
                                  <?php if(get_field('contacto-texto4')){?>
                            <h3 class="subtitu1"><?php the_field('contacto-texto4');?></h3>
                            <?php } ?>
                     <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 alto-mapa">
         <div class="mapa-container">
         <?php if(get_field('google_map')){?>
             <iframe src=" <?php the_field('google_map');?>" width="600" height="450" frameborder="0" style="border:0"></iframe>
         
          <?php } ?>

        </div>
        </div>
        </div>
        
    </section>

     <footer >
        <div class="container-footer">
        <div class="container">
            <div class="row footer-nayec">
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                         <div class="col-lg-6 telefono ">
                            <i class="fa fa-phone telefono"></i>
                        </div>
                        <div class="col-lg-6 numeros sin-padding">
                             <?php if(get_field('contacto-numero1')){?>
                                <p class="numeros"><?php the_field('contacto-numero1');?></p>
                             <?php if(get_field('contacto-numero2')){?>
                                <p class="numeros"><?php the_field('contacto-numero2');?></p>
                             <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                     <div class="row">
                         <div class="col-lg-4 logo-correo ">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-lg-8 numeros">
                             <?php if(get_field('contacto-correo')){?>
                            <p class="correo"><?php the_field('contacto-correo');?></p>
                            <?php } ?>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 logos-footer">                 
                                <a href="#"><i class="fa fa-facebook face"></i></a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 text-center"> 
                             <?php if(get_field('redessociales-facebook')){?>
                                 <p class="redes-footer"><?php the_field('redessociales-facebook');?></p>
                              <?php } ?>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 logos-footer">
                                    <a  href="#"><i class="fa fa-twitter twi"></i></a>
                                </div>
                                 <div class="col-lg-8 col-md-8">
                                      <?php if(get_field('redessociales-twitter')){?>
                                        <p class="redes-footer"><?php the_field('redessociales-twitter');?></p>
                                    <?php } ?>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-4 col-md-4 logos-footer">
                                  <a href="#"><i class="fa fa-linkedin in"></i></a>
                                </div>
                                 <div class="col-lg-8 col-md-8">
                                     <?php if(get_field('redessociales-in')){?>
                                        <p class="redes-footer"><?php the_field('redessociales-in');?></p>
                                     <?php } ?>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-6">
                     <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 logo-ubicacion  ">
                                  <a href="#"><i class="fa fa-map-marker twi"></i></a>
                                </div>
                                 <div class="col-lg-8 col-md-8 col-sm-12 text-center">
                                    <?php if(get_field('contacto-direccion')){?>
                                        <p class="direccion-nayec  ">
                                            <?php the_field('contacto-direccion');?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                    </div>
                </div>
         <?php } ?>
        <?php } ?>
                <div class="row">
                    <div class="col-lg-12 text-center pk">
                        <p  class="desarrollado-pk">Copyright © 2015 www.nayec.com Todos los derechos reservados
                            Desarrollado por Proyecto Kamila C.A
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer();  ?>
    </footer>
    <!-- jQuery -->
<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/classie.js"></script>
<script src="<?php bloginfo('template_url');?>/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
<script src="<?php bloginfo('template_url');?>/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_url');?>/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
<script src="<?php bloginfo('template_url');?>/js/agency.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/demos/css/page.css">

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url');?>/slider/js/jquery.anythingslider.js"></script>
    <script>
    $(function () {
        $('#slider1').anythingSlider({
expand: true,
buildStartStop: false,
buildArrows: true,
autoPlay: true ,
hashTags: false
                        
        });


    });
    </script>

</div>
</body>

</html>

