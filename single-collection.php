<?php get_header(); ?>
    <div class="i_content">
        <h2>Collection<br><span>-参考商品-</span></h2>

<?php if(have_posts()): ?>
<?php while(have_posts()): ?>
    <?php the_post(); ?>
            <div class="single_item">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <?php echo post_custom("stone"); ?>
                <p><?php echo post_custom("recommended"); ?></p>
                <a href="<?php echo home_url(); ?>/collection">一覧へ戻る</a>
            </div>
<?php endwhile; ?>
<?php endif; ?>

    </div>
<?php get_footer(); ?>