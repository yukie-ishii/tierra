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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="<?php the_path(); ?>/js/jquery.bgswitcher.js"></script>

<script>
$(document).ready(function(){
    // ページ読み込み時に実行したい処理

    // heroイメージの画像切り替えプラグイン
    $('.home #hero').bgSwitcher({
        images: ['images/top_hero1.jpg','images/top_hero2.jpg','images/top_hero3.jpg','images/top_hero4.jpg'],
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