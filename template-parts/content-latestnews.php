<?php 
    $latest_news_title = get_field('latest_news_title', 'options');
    $args = array(
        'post_type' => 'post',
        'posts_per_page'=>'3',
        'orderby' => 'date',
        'order' => 'DESC'
        
    );
        $latest_news = new WP_Query($args);
        if($latest_news->have_posts()):
?>
<section class="latest_news">
    <div class="container">
        <?php if($latest_news_title): ?>
        <p class="main_heading"><?=$latest_news_title;?></p>
<?php endif;?>
        <div class="row">
        <?php 
                 while($latest_news->have_posts()): $latest_news->the_post();
        ?>
            <div class="col-md-4 text-sm-center text-md-left">
            <div class="news_image" style="background:url(<?=get_the_post_thumbnail_url(get_the_ID(),'latest_news_image');?>) no-repeat center center; background-size: cover;">
                <p class="news_month"><?php the_time('M');?></p><span class="news_date"><?php the_time('d');?></span></p>
            </div>
            <?php if(get_the_title()):?>
            <p class="article_title"><?php the_title();?></p>
        <?php endif;?>
        <?php if(get_the_excerpt()):?>
            <div class="article_excerpt"><?php the_excerpt();?><a href="<?php the_permalink();?>" class="read_more_link"><?php echo __('Read More','stormguard');?></a></div>
        <?php endif;?>
            <span class="article_author"><?php echo __('By ','stormguard');?><?=get_the_author();?></span>
        </div>
        <?php endwhile;?>
    </div>
    <span class="more_news"><a href="<?=get_post_type_archive_link('post');?>" class="btn secondary-btn"><?php echo __('View More News','stormguard');?></a></span>
</div>
</section>
<?php 
    endif;
    wp_reset_postdata();
?> 