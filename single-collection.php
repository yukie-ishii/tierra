<?php get_header(); ?>
    <div class="i_content">
        <h2>Collection<br><span>-参考商品-</span></h2>

<?php if(have_posts()): ?>
<?php while(have_posts()): ?>
    <?php the_post(); ?>
            <div class="single_item">
                <?php the_post_thumbnail(  'medium'); ?>
<!--                 <?php set_post_thumbnail_size( 280, 280, true); ?> -->
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <?php echo post_custom("stone"); ?>
                <p><?php echo post_custom("recommended"); ?></p>
            </div>
<?php endwhile; ?>
<?php endif; ?>

    </div>
<?php get_footer(); ?>