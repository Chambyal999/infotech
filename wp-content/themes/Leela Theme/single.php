<?php
/**
 * Blogs file.
 * 
 * @package Leela infotech
 */
get_header();
?>
<div class="content-area" style="display: flex; gap: 20px;">
    
    <!-- Main Blog Content -->
    <main class="site-main" style="flex: 3;">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );
        endwhile;
        ?>
    </main>

    <!-- Sidebar -->
    <div class="sidebar-wrapper" style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>

</div>
<?php get_footer('');
?>