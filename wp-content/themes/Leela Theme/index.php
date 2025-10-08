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
    <div class="px-lg-5">
        <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    <!-- next previous button start  -->
<?php if(is_page( array( '132, 133, 134'))){ ?>
<section class="pb-lg-5 pb-4">
    
<?php
$current_url = home_url( add_query_arg( NULL, NULL ) );

$uiux  = "https://infotech.leelaholdings.in/services/ui-ux-design/";
$web   = "https://infotech.leelaholdings.in/services/web-development/";
$dm    = "https://infotech.leelaholdings.in/services/digital-marketing/";

echo '<div class="d-flex gap-4">';

if ($current_url == $uiux) {
    // On first page → only NEXT
    echo '<a href="' . $web . '" class="btn btn-primary">Next</a>';
} 
elseif ($current_url == $web) {
    // On second page → PREVIOUS + NEXT
    echo '<a href="' . $uiux . '" class="btn btn-primary">Previous</a>';
    echo '<a href="' . $dm . '" class="btn btn-primary">Next</a>';
} 
elseif ($current_url == $dm) {
    // On third page → only PREVIOUS
    echo '<a href="' . $web . '" class="btn btn-primary">Previous</a>';
}
echo '</div>'; ?>
</section>
<!-- next previous button end  -->
<?php } else if(is_page(41)){
    get_template_part('/template-parts/services-section');
 } else {?>

 <?php } ?>
    </div>
    </div>


    


    </main>
</div>


<?php get_footer(); ?>