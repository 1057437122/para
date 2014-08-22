<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage parabola
 * @since parabola 0.5
 */
 ?><!DOCTYPE html>
 <?php 
 if(!is_mobile() && !$_GET['debuggs'] && $_GET['debuggs']!='xxx' ){
	// header('Location:http://wee.leepine.com/');
	echo '本平台仅支持通过手机访问，使用微信扫描以下二维码快速访问，或者搜索微信公众平台Leez关注即可访问，找到您需要的东西！';
	echo '<div style="margin:0 auto;padding:20px;" ><img src="http://img0.ph.126.net/vpaJuBM4uzQTBJ5B0iTtHA==/6608779565492314002.png" /></div>';
	exit();
}
 ?>
<html <?php language_attributes(); ?>>
<head>
<?php  cryout_meta_hook(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
 	cryout_header_hook();//add_action ('cryout_header_hook','parabola_fav_icon')
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php cryout_body_hook(); //to top ?>

<div id="wrapper" class="hfeed">

<?php cryout_wrapper_hook(); ?>

<div id="header-full">

<header id="header">

<?php cryout_masthead_hook(); ?>

		<div id="masthead">

			<div id="branding" role="banner" >

				<?php cryout_branding_hook();?>
				<div style="clear:both;"></div>

			</div><!-- #branding -->

			<nav id="access" role="navigation">

				<?php cryout_access_hook();?>

			</nav><!-- #access -->

		</div><!-- #masthead -->

	<div style="clear:both;height:1px;width:1px;"> </div>

</header><!-- #header -->
</div><!-- #header-full -->
<div id="main">
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>

		<?php cryout_breadcrumbs_hook();?>
