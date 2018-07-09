<section class="testimonials">
    <?php 
        $testimonial_section_title = get_field('testimonials_title', 'options');
        if($testimonial_section_title):
    ?>
    <p class="main_heading"><?=$testimonial_section_title;?></p>
        <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-1">
                <div class="testimonials_slider">
                
                <?php if(have_rows('testimonials','options')):
                    while(have_rows('testimonials','options')): the_row();
                    $testimonial_text = get_sub_field('testimonial_text');
                    $testimonial_author = get_sub_field('testimonial_author');
                    $testimonial_author_position = get_sub_field('testimonial_author_position');
                 ?>
                 <div>
                <div class="testimonial">
                    <p><?=$testimonial_text;?></p>
                </div>
                <div class="testimonial_author_wrapper"><span class="testimonial_author float-right"><?=$testimonial_author;?></span><span><?=$testimonial_author_position;?></span></div>
                </div>
                <?php 
    endwhile;
endif;
?>
                </div>
                <div class="dots"></div>
            </div>
        </div>
    </div>
</section>