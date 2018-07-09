<?php 
// Template Name: Contact Page
get_header();
$contact_page_titile = get_field('contact_page_title','options');
$contact_page_subtitile = get_field('contact_page_subtitle','options');
$contact_page_form = get_field('contact_page_form','options');
?>
<section class="contact_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?=$contact_page_titile;?></h1>
                <p><?=$contact_page_subtitile;?></p>
                <div class="contact_page_form">
                    <?=$contact_page_form;?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
get_footer();
?>