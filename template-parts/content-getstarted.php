
<section class="get_started">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <p class="main_heading">Ready To Get Started?</p>
            <p class="main_description">Damage to your home or business from a storm? <br />
            Looking to replace your old roof or siding? Get Started below!</p>
            </div>
        </div>
    <div class="get_started_services text-center">
        <div class="row">
        <?php 
            if(have_rows('get_started_content', 'options') ):
                while (have_rows('get_started_content', 'options') ) : the_row();
                    $get_started_image = get_sub_field('get_started_image')['sizes']['get_started_images'];
                    $get_started_link = get_sub_field('get_started_link');
                    $get_started_text = get_sub_field('get_started_text');

        ?>
            <div class="col-md-4 service_item">
                <div class="service_overlay" style="background: url('<?=$get_started_image;?>') center center no-repeat;"></div>
                <span><a href="<?=$get_started_link;?>" class="service_link"><?=$get_started_text;?></a></span>
            </div>
        <?php 
                   endwhile;
                endif;
        ?>
        </div>
    </div>
    </div>
</section>