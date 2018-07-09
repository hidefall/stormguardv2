<?php
$offers_title = (is_front_page()) ? get_field('front_offers_title','options') : get_field('offers_title','options'); 
$offers_content = (is_front_page()) ? get_field('front_offers_content','options') : get_field('offers_content','options'); 
$except_post = (!is_front_page()) ? array(get_the_ID()) : array();
?>
<div class="offerings_block <?=(!is_front_page()) ? 'offerings_block--bordered' : '' ;?>">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="main_heading"><?=$offers_title;?></p>
                <p class="main_description"><?=$offers_content;?></p>
            </div>
        </div>
        <div class="row">
            <?php $services_query = new WP_Query( array( 
                'post_type' => 'services',
                'posts_per_page' => 6,
                'post__not_in' => $except_post
                ) ); 

            if($services_query->have_posts()) :
                while($services_query->have_posts()) : $services_query->the_post();
            ?>
            <div class="col-md-4 offer-block text-center">
            <a href="<?php the_permalink();?>" class="service_link">
                <span class="offering_icon"><img src="<?php the_field('service_images')?>" alt=""></span>
                <p class="offering_title"><?php the_field('service_title')?></p>
                <p class="offering-description"><?php the_field('service_text')?></p>
                </a>
            </div>
            
<?php 
endwhile;
        endif;
        wp_reset_postdata();
?>
            </div>
            <span><a href="<?php echo get_post_type_archive_link('services');?>" class="btn">View All Services</a></span>
        </div>
    </div>