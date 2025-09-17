<?php
/**
 * Main template file.
 * 
 * @package Leela
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5 container" role="main">
    <div class="p-5">
        <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    </div>
    </div>
    </main>
</div>


<?php
get_footer();