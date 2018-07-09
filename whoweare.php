<?php 
 // Template Name: Who We Are
get_header();
?>
<section class="who_we_are">
    <div class="container">
    <?php get_template_part('template-parts/content', 'breadcrumbs');?>
    <div class="row who_we_are_content">
        <div class="col-md-6 who_we_are_image">
            <?=get_the_post_thumbnail();?>
        </div>
        <div class="col-md-6 who_we_are_text">
            <?php the_content();?>
        </div>
</div>

<?php get_template_part( 'template-parts/content', 'getstarted' ); ?>
</div>
<?php get_template_part( 'template-parts/content', 'franchise' ); ?>
</section>



<?php 
get_footer();
?>