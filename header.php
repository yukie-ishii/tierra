<?php
setcookie("f_time", true, time() + 60 * 60 * 12);

if(is_404()){
    $bodyClass = "page404";
}
elseif(is_singular("collection")){
  $bodyClass = "collection";
}
else {
    $bodyClass = $post -> post_name;
}
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="側に置いた瞬間からポジティブなエネルギーが満ち溢れ、幸運体質へ導くTIERRAのオルゴナイト。
パワーストーンを特殊加工する事で、見た目の美しさと共に癒し・愛・金運など目的別のエネルギーを拡大させます。
オルゴナイトが引き寄せるエネルギーのシャワーが、常に降り注ぐスーパーパワースポットです。">
<meta name="keywords" content="オルゴナイト,アートオルゴナイト,orgonite,オルゴン,orgone,ラヴオルゴン,パワーストーン,スピリチュアル,生命エネルギー,エネルギー,ポジティブ,天然石,手作り,開運,インテリア,電磁波,プラスエネルギー,レジン,ワークショップ">
<title><?php echo wp_get_document_title(); ?></title>
<link rel="stylesheet" href="<?php the_path(); ?>/css/sanitize.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="<?php the_path(); ?>/css/style.css" media="screen and (min-width: 481px)">
<link rel="stylesheet" href="<?php the_path(); ?>/css/sp.css" media="screen and (max-width: 480px)">
<link rel="SHORTCUT ICON" href="<?php the_path(); ?>/images/logo_favicon.png">
<?php wp_head(); ?>
</head>

<body id="<?php echo $bodyClass; ?>">


<?php if(!isset($_COOKIE["f_time"]) && $bodyClass === "home"): ?>
    <div class="first">
        <img src="<?php the_path(); ?>/images/logo_footer.png" class="f_img" alt="">
    </div>
<?php endif; ?>

<div id="wrapwrap">
<header>
    <h1><a href="<?php echo home_url(); ?>"><img src="<?php the_path(); ?>/images/logo_header.png" alt="ティエラ(ブランド名)　オルゴナイト(パワーストーンの種類)" width="95%"></a></h1>
    <nav class="main_nav">
            <ul>
               <li><a href="<?php echo home_url(); ?>">Home</a></li>
               <li><a href="<?php echo home_url(); ?>/about">About</a></li>
               <li><a href="<?php echo home_url(); ?>/collection">Collection</a></li>
               <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
            </ul>
    </nav>
    <div class="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
            <ul>
               <li><a href="<?php echo home_url(); ?>">Home</a></li>
               <li><a href="<?php echo home_url(); ?>/about">About</a></li>
               <li><a href="<?php echo home_url(); ?>/collection">Collection</a></li>
               <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</header>

<?php if($bodyClass === "home"): ?>
    <div id="hero">
            <p>側に置いた瞬間からポジティブなエネルギーが満ち溢れ、<br>幸運体質へ導く TIERRA のアートオルゴナイト。<br>
            <span>パワーストーンを特殊加工する事で、見た目の美しさと共に<br>癒し・愛・金運など目的別のエネルギーを拡大させます。</span></p>
    </div>
<?php endif;  ?>
<div class="wrap">
    <main>