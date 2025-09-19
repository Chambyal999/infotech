<?php
/**
 * Blogs file.
 * 
 * @package Leela infotech
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5 container" role="main">
  <div class="row">
      <div class="col-lg-8 col-12 px-lg-5">
        <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    </div>
  
<div class="col-lg-4 d-lg-block d-none">
       <div class="sidebar-wrapper" style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>
    </div>

</div>
    </main>
    </div>