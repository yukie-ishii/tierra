<?php get_header(); ?>
    <div class="i_content">
        <h2>Collection<br><span>-参考商品-</span></h2>
        <div class="items">
<?php
$args =  [
    "post_type" => "collection",
    "post_status" => "publish",
    "posts_per_page" => 12
    ];
$customPosts = get_posts($args);
 ?>
    <?php if($customPosts): ?>
    <?php foreach ($customPosts as $post): ?>
    <?php setup_postdata($post); ?>
    <?php $slug_name = $post->post_name; ?>
            <a href="<?php echo home_url(); ?>/collection/<?php echo $slug_name; ?>"><div class="item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div></a>

    <?php endforeach; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

        </div>

        <div class="selling">
            <h2>Selling<br><span>-販売商品-</span></h2>
            <div class="content">
                <p>現在、販売している商品は<span><a href="https://aether.thebase.in/" target="_blank"> こちら&gt&gt</a></span></p>
            </div>
        </div>

    </div>
<?php get_footer(); ?>