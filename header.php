<?php
$langs = ["ru","fr","zh","pt","ko_KR","ja","es"];
$pathArray = explode('/', $_SERVER[REQUEST_URI]);
// Redirect non-english posts for translation
/*
if (is_single()){
	$pubDate = get_the_date(U);
	if ( (in_array($pathArray[1], $langs)) && ($pubDate <= 1489363200 ) ) { // Published on or before 2017-03-13
		$redirectLang = strtolower($pathArray[1]);
		if ($redirectLang === 'pt') {
			$redirectLang = 'pt_br';
		}
		$origURL = 'https://z.cash/'.$redirectLang.'/blog/'.$pathArray[2].'.html';
		echo '<a href="'.$origPost.'" target="_blank">'.$origPost.'</a>';
		function Redirect($url, $permanent = false) {
			if (headers_sent() === false) {
				header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
			}
			exit();
		}
		Redirect($origURL);
	}
}
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91560402-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91560402-2');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

		<?php
		$isLang = $pathArray[1];
		if (!in_array($isLang, $langs)) {
			$pageslug = $_SERVER[REQUEST_URI];
		} else {
			$pageslug = substr($_SERVER[REQUEST_URI], strlen($isLang)+1);
		}
		?>

		<div class="dropdown">
            <button>Language</button>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $pageslug ?>">English</a></li>
                <li><a href="<?php echo '/ru' . $pageslug ?>">Русский</a></li>
                <li><a href="<?php echo '/fr' . $pageslug ?>">Français</a></li>
                <li><a href="<?php echo '/zh' . $pageslug ?>">中文</a></li>
                <li><a href="<?php echo '/pt' . $pageslug ?>">Português</a></li>
                <li><a href="<?php echo '/ko_KR' . $pageslug ?>">한국어</a></li>
                <li><a href="<?php echo '/ja' . $pageslug ?>">日本語</a></li>
                <li><a href="<?php echo '/es' . $pageslug ?>">Español</a></li>
            </ul>
        </div>

	</header><!-- #masthead -->
	<div class="site-content-contain">
		<div id="content" class="site-content">
