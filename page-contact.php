<?php get_header(); ?>
    <div class="contact_des">
        <h2>Contact<br><span>-お問い合わせ・ご感想-</span></h2>
        <div class="input">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
            <?php the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>