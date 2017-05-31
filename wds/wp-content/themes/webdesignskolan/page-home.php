<?php
/*
    Template Name: Home Page


*/


// Advanced custom Fields

$hero_text= get_field('hero_text');
$button_link= get_field('button_link');
$html_link= get_field('html_link');
$css_link= get_field('css_link');
$javascript_link= get_field('javascript_link');










get_header(); ?>
<!-- HERO
   ================================================== -->
   <section id="hero" data-type="background" data-speed="5">
     <article>
       <div class="container clearfix">
         <div class="row">

           <div class="col-sm-5">
             <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png"> </img>

           </div>
           <div class="col-sm-2">

           </div>

           <div class="col-sm-5 hero-text">
             <h1><?php echo $hero_text; ?></h1>


                 <p><a class="btn btn-lg btn-danger gobutton" href="<?php echo $button_link; ?>" role="button">Blogg &raquo;</a></p>
           </div><!-- col -->

         </div><!-- row -->
       </div><!-- container -->
     </article>
   </section> <!--HERO SECTION -->

<!-- PROJECT FEATURES
 ================================================== -->
 <section id="project-features">
   <div class="container hideme">

     <h2>Vad Du Kommer Att Lära Dig?</h2>
     <p class="lead">Denna sida är till för den som vill designa sin allra första <strong>webbplats</strong> eller om man redan utformat ett par stycken och vill lära sig mer.
     Det finns tre språk man kommer långt med och det är <strong>HTML5, CSS och JAVASCRIPT </strong> och på den här sidan kan man läsa lite om detta.</p>

     <div class="row">
       <div class="col-sm-4 hideme">
         <div data-tilt> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-design.png"  alt="Design"> </div>
         <h3><a href="<?php echo $html_link; ?>">HTML 5</a></h3>
         <p>You get to work with a modern, professional quality design &amp; layout.</p>
       </div><!-- col -->
       <div class="col-sm-4 hideme">
         <div data-tilt><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-code.png"  alt="Code"> </div>
         <h3><a href="<?php echo $css_link; ?>">CSS3 AND STYLE</a></h3>
         <p>Det finns något som heter CSS. Detta är ett språk som designar dokumentet</p>
       </div><!-- col -->
       <div class="col-sm-4 hideme">
         <div data-tilt><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png"  alt="CMS"> </div>
         <h3><a href="<?php echo $javascript_link; ?>">JAVASCRIPT</a></h3>
         <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
       </div><!-- col -->

     </div><!-- row -->

   </div><!-- container -->
 </section><!-- project-features -->


 <!-- VIDEO FEATURETTE
 ================================================== -->
 <section id="featurette">
   <div class="container">
     <div class="row">
       <div class="col-sm-8 col-sm-offset-2">
         <h2>Praktisk Webbutvecklingsguide 2017</h2>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/9hDKfBKuXjI" frameborder="0" allowfullscreen></iframe>
       </div><!-- end col -->
     </div><!-- row -->
   </div><!-- container -->
 </section><!-- featurette -->










<?php get_footer(); ?>
