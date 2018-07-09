<?php
get_header();
?>
<section class="services_page">
    <div class="container">
    <?php get_template_part('template-parts/content', 'breadcrumbs');?>
        <div class="row">
            <div class="col-md-6">
                <div class="article_img"><?php the_post_thumbnail('single_thumbnail');?></div>
            </div>
            <div class="col-md-6">
                <p class="article_heading"><?php the_title();?></p>
                <div class="article_content">
                <?php
                the_content();
                ?>
</div>
            </div>
        </div>
</section>
<!-- Get Started Section -->
<?php get_template_part( 'template-parts/content', 'getstarted' ); ?>

<?php get_template_part( 'template-parts/content', 'franchise' ); ?>
<script>
    $('.franchise-wrapper').css('margin-top', '20px');
</script>




<?php get_footer()?>