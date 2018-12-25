    </main>
</div>

<footer>
    <div class="fot_logo">
        <p class="pagetop">^<br>TOP</p>
        <img src="<?php the_path(); ?>/images/logo_footer.png" alt="" width="200px">
    </div>
    <div class="fot_text">
        <ul>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url(); ?>/about">アーテスト紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/collection">作品一覧</a></li>
            <li><a href="<?php echo home_url(); ?>">プライバシーポリシー</a></li>
            <li><a href="<?php echo home_url(); ?>/contact">問い合わせ</a></li>
        </ul>
        <p><small>&copy; TIERRA ORGONITE All Rights Reserved.</small></p>
    </div>
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="<?php the_path(); ?>/js/jquery.bgswitcher.js"></script>

<script>
$(document).ready(function(){

<?php if(!isset($_COOKIE["f_time"])): ?>
    // ページ読み込み時に実行したい処理
    $("#wrapwrap").css("display", "none");
    var mainheight = $(window).height();
    var mainwidth = $(window).width();
    $('.first').css('height', mainheight);
    $('.first').css('width', mainwidth);
    $('.f_img').hide();
    $('.f_img').fadeIn(2000);
        setTimeout(function() {
            $(".first").fadeOut(3000);
            $("#wrapwrap").css("display", "block");
        },4000);
        $(window).click(function() {
            $(".first").fadeOut(3000);
            $("#wrapwrap").fadeIn(3000);
        });
<?php endif; ?>

    // heroイメージの画像切り替えプラグイン
    $('#home #hero').bgSwitcher({
        images: ['<?php the_path(); ?>/images/top_hero1.jpg','<?php the_path(); ?>/images/top_hero2.jpg','<?php the_path(); ?>/images/top_hero3.jpg','<?php the_path(); ?>/images/top_hero4.jpg'],
    });

    // TOPへ戻る
    var pagetop = $('.pagetop');
        pagetop.click(function () {
         $('body, html').animate({ scrollTop: 0 }, 1000);
         return false;
    });

    // スクロールするとふわっと現れる文字
    $('.animation').css('visibility','hidden');
    $(window).scroll(function(){
       var windowHeight = $(window).height(),
       topWindow = $(window).scrollTop();
       $('.animation').each(function(){
          var targetPosition = $(this).offset().top;
          if(topWindow > targetPosition - windowHeight + 100){
             $(this).addClass("fadeInDown");
         }
     });
   });


});
</script>
<?php wp_footer(); ?>
</body>
</html>