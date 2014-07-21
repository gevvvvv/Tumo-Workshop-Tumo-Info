<?php get_header(); ?>
<script type="text/javascript">
function scroll()
{
	window.scrollTo(0, 500);
}
</script>
<section id="content" role="main">
	<div id="Main_panel">
		<div class="Tumo_map_image">
			<a href="#Image_iframe"><img src="http://localhost/wp-content/uploads/2014/07/map.jpg" width="1021" height="600" alt="Թումոյի քարտեզ" usemap="#map_name" id="tumo-map"></a>
			<map name="map_name">
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="175,379,169,294,332,285,341,369" href="<?=get_template_directory_uri();?>/map_parts/page1.html" title="Փայտե աստիճաններ" target="iframe" id="oah"> 	<!--payte astijanner-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="566,238,556,184,633,164,655,215" href="<?=get_template_directory_uri();?>/map_parts/page2.html" title="Գ1 սենյակ" target="iframe" id="oah">			<!--G1-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="656,216,635,163,688,143,724,187" href="<?=get_template_directory_uri();?>/map_parts/page3.html" title="Գ2 սենյակ" target="iframe" id="oah">			<!--G2-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="887,321,817,247,874,211,965,276" href="<?=get_template_directory_uri();?>/map_parts/page4.html" title="Կինոդահլիճ" target="iframe" id="oah">			<!--Kinodahlij-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="712,165,688,142,743,112,767,133" href="<?=get_template_directory_uri();?>/map_parts/page5.html" title="Ռոբոտիքսի սենյակ" target="iframe" id="oah">	<!--robotiqs-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="773,205,725,160,769,133,828,175" href="<?=get_template_directory_uri();?>/map_parts/page6.html" title="Խաղերի սենյակ" target="iframe" id="oah">		<!--game room-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="408,253,405,199,518,191,526,245" href="<?=get_template_directory_uri();?>/map_parts/page7.html" title="Ճաշարան" target="iframe" id="oah">				<!--Cafeteria-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="321,258,318,204,405,199,406,253" href="<?=get_template_directory_uri();?>/map_parts/page8.html" title="Բ1 սենյակ" target="iframe" id="oah">			<!--B1-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="528,244,518,190,556,184,568,237" href="<?=get_template_directory_uri();?>/map_parts/page9.html" title="Մարզիչների հանդերձարան" target="iframe" id="oah">	<!--Coach room-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="174,268,167,213,317,204,321,258" href="<?=get_template_directory_uri();?>/map_parts/page10.html" title="Բ2 սենյակ" target="iframe" id="oah">				<!--B2-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="60,308,52,247,58,246,54,219,168,213,174,268, 143,270,147,300" href="<?=get_template_directory_uri();?>/map_parts/page11.html" title="Բ3 սենյակ" target="iframe" id="oah">	<!--b3-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="79,472,66,357,152,353,157,407,172,407,174,466" href="<?=get_template_directory_uri();?>/map_parts/page12.html" title="BrainStorming room" target="iframe" id="oah">	<!--BrainStorming room-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="175,465,169,408,344,397,349,454" href="<?=get_template_directory_uri();?>/map_parts/page13.html" title="Ա2 և Ա3 սենյակներ" target="iframe" id="oah">		<!--A2 & A3-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="349,455,344,397,426,392,429,451" href="<?=get_template_directory_uri();?>/map_parts/page14.html" title="Ա1 սենյակ" target="iframe" id="oah">				<!--A1-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="431,447,427,391,479,388,483,444" href="<?=get_template_directory_uri();?>/map_parts/page15.html" title="Գրանցման սենյակ" target="iframe" id="oah">			<!--Registration-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="488,447,482,388,547,384,552,442" href="<?=get_template_directory_uri();?>/map_parts/page16.html" title="Մուտք" target="iframe" id="oah">					<!--Acsess-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="555,439,548,384,595,378,615,434" href="<?=get_template_directory_uri();?>/map_parts/page17.html" title="Դ1 սենյակ" target="iframe" id="oah">				<!--D1-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="615,434,607,402,598,378,772,331,795,389,705,416" href="<?=get_template_directory_uri();?>/map_parts/page18.html" title="Դ2 և Դ3 սենյակներ" target="iframe" id="oah">	<!--D2 & D3-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="799,384,774,332,846,301,874,352,839,370" href="<?=get_template_directory_uri();?>/map_parts/page19.html" title="Դ4 սենյակ" target="iframe" id="oah"> 		<!--D4-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="428,363,428,341,468,338,470,362" href="<?=get_template_directory_uri();?>/map_parts/page20.html" title="Ինֆորմացիոն վահանակ" target="iframe" id="oah"> 	<!--Info desk-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="421,332,413,282,452,279,457,328" href="<?=get_template_directory_uri();?>/map_parts/page21.html" title="Զուգարան" target="iframe" id="oah">				<!--Toliet-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="467,331,460,282,481,281,487,329" href="<?=get_template_directory_uri();?>/map_parts/page22.html" title="Վթարային ելք" target="iframe" id="oah">				<!--Fire-->
				<area onclick="scroll(),app.map.doFirst();" shape="poly" coords="629,342,607,261,725,224,770,273,770,296,700,323," href="<?=get_template_directory_uri();?>/map_parts/page23.html" title="Installation area" target="iframe" id="oah">  <!--Installation area-->
			</map>
		</div>
		<div id="Explain_smth">Այս քարտեզի վրա նշված են Թումոյի առաջին հարկի բոլոր սենյակների տեղերը, և թե նրանցից որն ինչի համար է նախատեսված: Հուսով ենք այս քարտեզը կօգնի ձեզ արագ հարմարվել Թոումոյի միջավայրին:</div>
		<div id="Image_iframe">
		<iframe src="" width="1021" height="300" name="iframe" scrolling="no" id="ifr"></iframe>
		</div>
	</div>
<?php if (have_posts()):while( have_posts()):the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>