<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?=get_template_directory_uri();?>/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
<meta name="keywords" content="Tumo, TUMO, About Tumo, Թումո, ԹՈւՄՈ">
<meta name="description" content="Այս կայքը նախատեսված է Թումոյի նոր ուսանողներին օգնելու հնարավորինս արագ հարմարվել Թումոյին՝ ծանոթանալ մարզիչների հետ և քարտեզի միջոցով իմանալ, թե որ սենյակը ինչի համար է նախատեսված:">
<script type="text/javascript" src="<?=get_template_directory_uri();?>/js/vendor.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri();?>/js/app.js"></script>
</head>
<body id = "<?php echo page_body_id();?>" <?php body_class(); ?>>
<div id="container">
<div id="Above_Header">
	<div id="Header_nav">
		<div id="Header_logo">
			<a href="http://localhost/">
				<img src="<?=get_template_directory_uri();?>/images/1.jpg" height="120" width="180" />
			</a>
			<div id="Some_text_under_logo"><img src="<?=get_template_directory_uri();?>/images/2.jpg" height="15" width="130" ></a></div>
		</div>
		 <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
</div>
