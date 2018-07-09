<?php 
    $fr_title = get_field('franchise_zip_code_title', 'options');
    $fr_sub_title = get_field('franchise_zip_code_subtitle', 'options');
    $fr_image = get_field('franchise_zip_code_icon', 'options');
    $fr_form = get_field('franchise_zip_form', 'options');
?>
<?php
if($fr_title || $fr_sub_title || $fr_form):
// echo "<pre>";
// print_r($fr_image);
// echo "</pre>";
?>

<div class="franchise-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if($fr_image): ?>
                <span class="franchise_location_icon"><img src="<?=$fr_image['sizes']['franchise_zip_code_image'];?>" alt="<?=$fr_image['alt'];?>"></span>
<?php endif;?>
<?php 
    if($fr_title): ?>
                <p class="franchise_title"><?=$fr_title;?></p>
<?php endif;?>
<?php if($fr_sub_title): ?>
                <p class="franchise_description"><?=$fr_sub_title;?></p>
<?php endif;?>
            </div>
            <div class="col-md-4">
                <div class="enter_zip">
                    <?php echo $fr_form;?>
            </div>
        </div>
     </div>
    </div>  
</div>
</div>
<?php
endif;
?>