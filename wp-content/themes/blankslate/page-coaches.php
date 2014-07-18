<?php
//query Wordpress for getting posts
$items = new WP_Query(
    array(
        'post_type' => 'coaches',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

//reseting the query
wp_reset_query();

$posts = $items->posts;
?>
<?php get_header(); ?>
<section id="content" role="main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">
			<?=$post->post_content;?>
		</section>
		<section id="coaches">
			<?php foreach($posts as $item):
			$item->meta = get_fields($item->ID);
			
			?>
			<div class = "Coach_personality">
				<div class = "Coach_official_image">
					<img src="<?=$item->meta["image"]["sizes"]["thumbnail"];?>" />
				</div>
				<div class="About_Coach">
					<h3 class="Coach_name"><?=$item->post_title;?></h3>
					<p class="Coach_Abilities"><?=$item->post_content; ?></p>
				</div>
			</div>	
			<?php endforeach; ?>
		</section>
	</article>

</section>
<?php get_footer(); ?>