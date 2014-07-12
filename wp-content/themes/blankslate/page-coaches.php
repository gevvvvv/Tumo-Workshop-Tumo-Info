<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>

<?php

$coaches = array(
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
	array(
		"image" => "img.jpg",
		"name" => "John Smith",
	),
);


?>

<div id="coaches">
<?php foreach($coaches as $coach){?>
	<div class="coach">
		<div class="picture">
			<img src="<?=$coach["image"];?>" />
		</div>
		<div class="name">
			<?=$coach["name"];?>
		</div>
	</div>
<?php } ?>
</div>
<?php get_footer(); ?>