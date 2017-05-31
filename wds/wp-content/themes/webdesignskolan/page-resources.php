<?php
/*
    Template Name: Resources page


*/


// Advanced custom Fields
get_header(); ?>
<!-- FEATURE IMAGE -->
<section class="feature-image feature-image-default" >
    <h1 class="page-title"><?php the_title(); ?></h1>

  </section>
  <!-- MAIN CONTENT -->
<div class="container">
  <div class="row" id="primary">
    <div class="col-sm-12" id="content">
      <section class="main-content hidemecss">
        <?php while (have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; //end of the loop ?>
      </section>

    </div><!-- end col-->
  </div><!-- row-->
</div><!-- containe-->





<?php get_footer(); ?>
