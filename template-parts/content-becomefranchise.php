<?php 
    $bf_title = get_field('become_franchise_title', 'options');
    $bf_sub_title = get_field('become_franchise_sub_title', 'options');
    $bf_button_text = get_field('become_franchise_button_text', 'options');
    $bf_button_link = get_field('become_franchise_button_link','options');
?>
<?php
if($bf_title || $bf_sub_title || $bf_button_text):
// echo "<pre>";
// print_r($fr_image);
// echo "</pre>";
?>

<div class="franchise-wrapper become-franchise">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if($bf_title): ?>
                <p class="franchise_title"><?=$bf_title;?></p>
                <?php endif;?>
                <?php if($bf_sub_title): ?>
                <p class="franchise_description"><?=$bf_sub_title;?></p>
                <?php endif;?>
            </div>
            <div class="col-md-4">
                <div class="become_fr_btn">
                    <a href="<?=$bf_button_link?>"><?php echo $bf_button_text;?></a>
            </div>
        </div>
     </div>
    </div>  
</div>
</div>
<?php
endif;
?>