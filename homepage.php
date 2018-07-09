<?php
/*
    Template Name: Homepage
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'franchise' ); ?>
<!-- Offers Section -->
<?php get_template_part( 'template-parts/content', 'offers' ); ?>
<!--End Of Offers Section -->
<!-- Get Started Section -->
<?php get_template_part( 'template-parts/content', 'getstarted' ); ?>
<!-- End Of Get Started Section -->
<!-- Testimonials Section Start -->
<?php get_template_part('template-parts/content', 'testimonials');?>
<!-- Testimonials Section End -->
<!-- Latest News Section Start -->
<?php get_template_part('template-parts/content', 'latestnews');?>
<!-- Latest News Section End -->
<?php get_footer(); ?>